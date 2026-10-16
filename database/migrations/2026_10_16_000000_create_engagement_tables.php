<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('engagement_settings')) {
            Schema::create('engagement_settings', function (Blueprint $table) {
                $table->id();
                $table->string('key')->unique();
                $table->text('value')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('assessment_leads')) {
            Schema::create('assessment_leads', function (Blueprint $table) {
                $table->id();
                $table->string('full_name');
                $table->string('email');
                $table->string('company');
                $table->string('phone')->nullable();
                $table->string('industry')->nullable();
                $table->string('company_size')->nullable();
                $table->string('primary_challenge')->nullable();
                $table->text('additional_notes')->nullable();
                $table->json('responses')->nullable();
                $table->integer('score')->default(0);
                $table->string('maturity_level')->default('Emerging');
                $table->json('calculator_inputs')->nullable();
                $table->json('calculator_results')->nullable();
                $table->string('status')->default('New');
                $table->text('admin_notes')->nullable();
                $table->boolean('consultation_requested')->default(false);
                $table->string('ip_address', 64)->nullable();
                $table->text('user_agent')->nullable();
                $table->string('session_id', 128)->nullable();
                $table->timestamps();
            });
        }

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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engagement_events');
        Schema::dropIfExists('assessment_leads');
        Schema::dropIfExists('engagement_settings');
    }
};
