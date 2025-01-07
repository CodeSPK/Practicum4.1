<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors'; // Nombre explícito de la tabla
    protected $fillable = ['name', 'email', 'specialty']; // Campos asignables
}
