<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentSenderId extends Model
{
    protected $fillable = [
        'department_id',
        'sender_id',
        'is_active',
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }
}
