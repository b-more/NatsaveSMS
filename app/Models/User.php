<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'department_id',
        'branch_id',
        'api_key',
        'api_secret',
        'is_active',
    ];

    /**
     * Relationships
     */

    // User belongs to a department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // User belongs to a branch
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function smsOutboxes()
    {
        return $this->hasMany(SmsOutbox::class);
    }
}
