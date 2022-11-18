<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoGeneral extends Model
{
    use HasFactory;

    protected $table = 'contacto_contacto_general';
    protected $primaryKey = 'id_con_gen';
    protected $fillable = ['nombre_con_gen','correo_con_gen','fono_con_gen','fecha_con_gen','descripcion_con_gen'];
    public $timestamps = false;
}
