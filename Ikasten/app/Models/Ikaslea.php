<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikaslea extends Model
{
    use HasFactory;
    protected $table='ikasleak';
    protected $fillable=['izena','adina'];
}
