<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkMessage extends Model
{
    protected $fillable = [
        'user_id',
        'department_id',
        'sender_id',
        'message',
        'recipients',           // Stores multiple recipients as a JSON or comma-separated list
        'status',               // e.g., 'pending', 'sent', 'failed'
        'error_message',        // Details of any errors encountered
        'scheduled_at',         // Timestamp for scheduled sends
        'sent_at',              // Timestamp when messages were sent
        'total_recipients',     // Total count of recipients for the bulk SMS
        'delivered_count',      // Number of successfully delivered messages
        'failed_count',         // Number of failed deliveries
        'message_id',           // Unique identifier for tracking the message
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }
}
