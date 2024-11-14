<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class); // Assuming a Contact model exists
    }
}
