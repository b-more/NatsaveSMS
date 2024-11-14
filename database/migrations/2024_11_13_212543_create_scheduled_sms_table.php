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
        Schema::create('scheduled_sms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->string('message_from')->nullable();
            $table->string('message_to')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->nullable();
            $table->string('scheduled_at')->nullable();
            $table->string('type')->nullable();
            $table->string('received_at')->nullable();
            $table->string('read_at')->nullable();
            $table->boolean('is_scheduled')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_sms');
    }
};
