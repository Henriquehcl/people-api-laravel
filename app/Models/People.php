<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    //definindo as propiedades que podem ser alteradas
    protected $fillable = ['people_name','email','fone','address','coutry','state','city'];
}
