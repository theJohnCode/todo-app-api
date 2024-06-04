<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'completed'
    ];

    // protected $hidden = [
    //     'created_at',
    //     'updated_at'
    // ];

    protected $casts = [
        'completed' => 'boolean'
    ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->diffForHumans(),
        );
    }
}
