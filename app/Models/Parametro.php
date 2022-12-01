<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parametro extends Model
{
    use HasFactory;

    protected $table = 'parametro_parametro';
    protected $primaryKey = 'id_par';
    protected $fillable = ['nombre_par','valor_par'];
    public $timestamps = false;

    public static function nombreVendedora($id){
        return DB::table('parametro_parametro')
                ->where('id_vend_par','=',$id)
                ->get('nombre_par');
    }


}
