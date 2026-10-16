<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class EngagementEvent extends Model
{
    use HasFactory;

    protected $table = 'engagement_events';

    protected $fillable = [
        'event_name',
        'session_id',
        'page_path',
        'meta',
        'ip_address',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    /**
     * Record an engagement event safely.
     */
    public static function record(string $eventName, ?string $sessionId = null, ?string $pagePath = null, array $meta = [], ?string $ip = null): ?self
    {
        try {
            self::ensureTableExists();
            return self::create([
                'event_name' => $eventName,
                'session_id' => $sessionId ?: session()->getId(),
                'page_path'  => $pagePath ?: request()->path(),
                'meta'       => $meta,
                'ip_address' => $ip ?: request()->ip(),
            ]);
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Ensure table exists on server.
     */
    public static function ensureTableExists(): void
    {
        if (!Schema::hasTable('engagement_events')) {
            Schema::create('engagement_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_name', 100);
                $table->string('session_id', 128)->nullable();
                $table->string('page_path')->nullable();
                $table->json('meta')->nullable();
                $table->string('ip_address', 64)->nullable();
                $table->timestamps();

                $table->index('event_name');
                $table->index('created_at');
            });
        }
    }
}
