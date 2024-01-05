<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    public static array $reactions = ['nope', 'okay', 'good', 'nice', 'excellent'];

    public $timestamps = false;
    protected $fillable = ['reaction', 'message_id', 'count'];
}
