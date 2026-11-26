<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
        'fee',
        'difficulty',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'fee' => 'decimal:2',
        ];
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}