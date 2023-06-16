<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'seccion_seccion';
    protected $primaryKey = 'id_sec';
    protected $fillable = ['nombre_sec','descripcion_sec'];
    // timestamps esta en false cuando no hay created_at y updated_at en la tabla
    public $timestamps = true;

    // public function forId(){
    //     return DB::table('seccion_seccion')
    //             ->where('')
    //             ->get();
    // }
}
