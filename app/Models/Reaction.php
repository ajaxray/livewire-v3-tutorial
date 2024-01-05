<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public static array $reactions = ['nope', 'okay', 'good', 'nice', 'excellent'];

    public $timestamps = false;
    protected $fillable = ['reaction', 'message_id', 'count'];
}
