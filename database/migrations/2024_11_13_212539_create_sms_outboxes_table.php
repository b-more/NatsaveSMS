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
        Schema::create('sms_outboxes', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('department_id')->nullable();
            $table->UnsignedBigInteger('branch_id')->nullable();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->string('message_id')->unique()->nullable(); // For tracking with Python script
            $table->string('source_addr', 20)->nullable(); // Sender ID
            $table->text('destination_addr')->nullable(); // Store multiple recipients as comma-separated
            $table->text('message')->nullable();
            $table->string('status')->default('pending')->nullable();
            $table->text('error_message')->nullable();
            $table->unsignedTinyInteger('priority_flag')->default(0);
            $table->timestamp('submitted_date')->nullable();
            $table->timestamp('done_date')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->unsignedTinyInteger('esm_class')->nullable();
            $table->unsignedTinyInteger('protocol_id')->nullable();
            $table->unsignedTinyInteger('data_coding')->nullable();
            $table->unsignedTinyInteger('registered_delivery')->nullable();
            $table->string('service_type', 6)->nullable();
            $table->string('message_type')->default('single'); // Added for bulk handling
            $table->integer('recipient_count')->default(1); // Added for bulk tracking
            $table->timestamps();

            // Indexes for better performance
            $table->index(['account_id', 'status']);
            $table->index(['message_id', 'status']);
            $table->index('submitted_date');
            $table->index('scheduled_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_outboxes');
    }
};
