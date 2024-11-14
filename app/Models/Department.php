<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'account_id',
        'name',
        'status',
    ];

    // Relationships
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function smsOutboxes()
    {
        return $this->hasMany(SmsOutbox::class);
    }
}
