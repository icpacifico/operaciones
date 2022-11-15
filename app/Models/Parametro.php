<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;

    protected $table = 'parametro_parametro';
    protected $primaryKey = 'id_par';
    protected $fillable = ['nombre_par','valor_par'];
    public $timestamps = false;

    


}
