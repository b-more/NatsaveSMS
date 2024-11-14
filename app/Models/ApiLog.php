<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $fillable = [
        'api_user_id',
        'endpoint',
        'method',
        'request_data',
        'response_data',
        'status_code',
        'error_message',
        'created_at',
    ];

    // Relationships
    public function apiUser()
    {
        return $this->belongsTo(ApiUser::class);
    }
}
