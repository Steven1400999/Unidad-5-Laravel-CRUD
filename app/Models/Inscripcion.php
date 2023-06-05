<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';
    
    protected $fillable = [
        'id_alumno',
        'fecha_ins',
    ];

    public function alumno(){
        return $this->belongsTo(Alumno::class, 'id_alumno', 'id_alumno');
    }
}
