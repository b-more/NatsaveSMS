<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'contact_group_id',
        'created_by',
    ];

    // Relationships
    public function contactGroup()
    {
        return $this->belongsTo(ContactGroup::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
