<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addinfo extends Model
{
    protected $table = 'addinfo';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'batch'
    ];
}