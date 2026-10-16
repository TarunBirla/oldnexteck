<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class EngagementSetting extends Model
{
    use HasFactory;

    protected $table = 'engagement_settings';

    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Default system settings.
     */
    public static function defaults(): array
    {
        return [
            'popup_enabled'         => '1',
            'popup_delay_seconds'   => '8',
            'popup_frequency_days'  => '7',
            'popup_exit_intent'     => '1',
            'popup_headline'        => "Let's Find the Right Technology Solutions for Your Business",
            'popup_description'     => "Discover how smarter technology, automation and AI could help your business work more efficiently.",
            'popup_primary_cta'     => "Discover My Business Opportunities →",
            'popup_secondary_cta'   => "Explore Our Services",
            'popup_close_text'      => "Maybe Later",
            'popup_supporting_text' => "Identify opportunities to improve your operations and technology.",
            'calculator_enabled'    => '1',
            'widget_enabled'        => '1',
        ];
    }

    /**
     * Get a setting value with fallback to default.
     */
    public static function get(string $key, $default = null)
    {
        try {
            self::ensureTableExists();
            $record = self::where('key', $key)->first();
            if ($record !== null && $record->value !== null) {
                return $record->value;
            }
        } catch (\Throwable $e) {
            // Graceful fallback on connection/table errors
        }

        $defaults = self::defaults();
        return $defaults[$key] ?? $default;
    }

    /**
     * Set a setting value.
     */
    public static function set(string $key, $value): void
    {
        self::ensureTableExists();
        self::updateOrCreate(
            ['key' => $key],
            ['value' => is_bool($value) ? ($value ? '1' : '0') : (string) $value]
        );
    }

    /**
     * Get all settings merged with defaults.
     */
    public static function getAllSettings(): array
    {
        $defaults = self::defaults();
        try {
            self::ensureTableExists();
            $records = self::pluck('value', 'key')->toArray();
            return array_merge($defaults, $records);
        } catch (\Throwable $e) {
            return $defaults;
        }
    }

    /**
     * Ensure the table exists and seed defaults if empty.
     */
    public static function ensureTableExists(): void
    {
        if (!Schema::hasTable('engagement_settings')) {
            Schema::create('engagement_settings', function (Blueprint $table) {
                $table->id();
                $table->string('key')->unique();
                $table->text('value')->nullable();
                $table->timestamps();
            });

            foreach (self::defaults() as $k => $v) {
                self::create(['key' => $k, 'value' => $v]);
            }
        }
    }
}
