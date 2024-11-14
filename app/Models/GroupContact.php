<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupContact extends Model
{
    protected $fillable = [
        'contact_group_id',
        'name',
        'phone_number',
        'email',
    ];

    // Relationships
    public function contactGroup()
    {
        return $this->belongsTo(ContactGroup::class);
    }
}
