<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_alumno';

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($alumno) {
    //         $ultimoAlumno = Alumno::latest('id_alumno')->first();
            
    //         $alumno->inscripciones()->create([
    //             'id_alumno' => $ultimoAlumno->id_alumno,
    //             'fecha_ins' => now(),
    //         ]);
    //     });
    // }
    // public function inscripciones()
    // {
    //     return $this->hasMany(Inscripcion::class);
    // }

    public function curso(){
        return $this->belongsTo(Curso::class, 'id_cursos', 'id_curso');
    }
    
}
