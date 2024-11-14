<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'department_id',
        'name',
        'location',
        'status',
    ];

    // Relationships
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function smsOutboxes()
    {
        return $this->hasMany(SmsOutbox::class);
    }
}
