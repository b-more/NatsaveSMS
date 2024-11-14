<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SenderId extends Model
{
    protected $fillable = [
        'sender_id',
        'is_whitelisted'
    ];

    // Relationships
    // public function account()
    // {
    //     return $this->belongsTo(Account::class);
    // }

    // public function smsOutboxes()
    // {
    //     return $this->hasMany(SmsOutbox::class, 'source_addr', 'sender_name');
    // }
}
