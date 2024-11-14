<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsInbox extends Model
{
    protected $fillable = [
        'account_id',
        'message_from',
        'message_to',
        'message',
        'status',
        'received_at',
        'read_at',
        'is_deleted',
    ];

    // Relationships
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
