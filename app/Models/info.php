<?php

namespace App\Models;
use App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $table='info';
    protected $fillable=['id','name','email','batch'];
    

}
