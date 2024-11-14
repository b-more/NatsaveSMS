<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'generated_by',
        'report_type',
        'parameters',
        'content',
        'generated_at',
    ];

    // Relationships
    public function generatedBy()
    {
        return $this->belongsTo(User::class, 'generated_by');
    }
}
