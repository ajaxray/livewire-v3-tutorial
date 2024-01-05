<?php

namespace App\Models;

use App\Livewire\Reactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Message extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['message', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    protected $attributes = [
        'is_active' => true,
    ];

    public function reactions(): HasMany
    {
        return $this->hasMany(Reaction::class);
    }
}
