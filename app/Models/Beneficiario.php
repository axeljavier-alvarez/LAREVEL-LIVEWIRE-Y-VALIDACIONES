<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'beneficiarios';

    protected $fillable = ['cui','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','celular','correo','sexo','fecha_nacimiento','estado_civil','activo'];
	
}
