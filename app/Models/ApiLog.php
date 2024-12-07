<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $fillable = [
        'user_id',
        'api_user_id',
        'method',
        'endpoint',
        'request_data',
        'response_data',
        'status_code',
        'ip_address',
        'user_agent',
        'processing_time',
    ];

    protected $casts = [
        'request_data' => 'array',
        'response_data' => 'array',
        'status_code' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function apiUser()
    {
        return $this->belongsTo(ApiUser::class);
    }
}
