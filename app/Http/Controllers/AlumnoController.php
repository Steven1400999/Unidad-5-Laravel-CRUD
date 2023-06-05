<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos'=> $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create', ['cursos' => Curso::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_alumno' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'edad' => 'numeric|required'
        ]);

        $alumno = new Alumno();
        $alumno ->nombre_alumno = $request->input('nombre_alumno');
        $alumno ->apellido_paterno = $request->input('apellido_paterno');
        $alumno ->apellido_materno = $request->input('apellido_materno');
        $alumno ->edad = $request->input('edad');
        $alumno ->id_cursos = $request->input('curso');
        $alumno ->save();
        return view("alumnos.message", ["msg" => "Registro Guardado"]);
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_alumno)
    {
        $alumno = Alumno::find($id_alumno);
        return view('alumnos.edit', ['alumno' => $alumno, 'cursos' =>Curso::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_alumno)
    {
        $request->validate([
            'nombre_alumno' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'edad' => 'required|integer|min:18|max:99'
        ]);

        $alumno = Alumno::find($id_alumno);
        $alumno ->nombre_alumno = $request->input('nombre_alumno');
        $alumno ->apellido_paterno = $request->input('apellido_paterno');
        $alumno ->apellido_materno = $request->input('apellido_materno');
        $alumno ->edad = $request->input('edad');
        $alumno ->id_cursos = $request->input('curso');
        $alumno ->save();
        return view("alumnos.message", ["msg" => "Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_alumno)
    {
        $alumno = ALumno::find($id_alumno);
        $alumno->delete();

        return redirect("alumnos");
    }
}
