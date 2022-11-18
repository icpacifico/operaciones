<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoEspecial extends Model
{
    use HasFactory;

    protected $table = 'contacto_contacto_especial';
    protected $primaryKey = 'id_con_esp';
    protected $fillable = ['nombre_con_esp','rut_con_esp','correo_con_esp','fono_con_esp','descripcion_con_esp','modelo_con_esp','medio_con_esp','id_vend_par'];    
}
