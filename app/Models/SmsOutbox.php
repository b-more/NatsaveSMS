<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsOutbox extends Model
{
    protected $fillable = [
        'department_id',
        'branch_id',
        'user_id',
        'message_id',
        'source_addr',
        'destination_addr',
        'message',
        'status',
        'error_message',
        'priority_flag',
        'submitted_date',
        'done_date',
        'scheduled_at',
        'esm_class',
        'protocol_id',
        'data_coding',
        'registered_delivery',
        'service_type',
        'message_type',
        'recipient_count',
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
