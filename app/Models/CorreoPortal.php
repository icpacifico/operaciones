<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorreoPortal extends Model
{
    use HasFactory;


    protected $table = 'correo_portal_reparto';
    protected $primaryKey = 'id_cor';
    protected $fillable = ['asunto_cor','body_cor'];    
}
