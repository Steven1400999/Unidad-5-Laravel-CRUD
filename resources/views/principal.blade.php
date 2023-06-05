@extends('layout/plantilla')

@section('title', 'Meldanex')

@section('contenido')
<main>
        
        
    <div class="container mt-4">

    <!-- Cursos -->
    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="card">
          <img src="exc.jpg" class="card-img-top" alt="Curso 1">
          <div class="card-body">
            <h5 class="card-title">Curso Excel</h5>
            <p class="card-text">Curso donde se mostrará las funciones básicas proporcionadas dentro de la aplicación de Excel, hasta como implementar herramientas externas y lenguajes de código como Visual Basic.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img src="power.jpg" class="card-img-top" alt="Curso 2">
          <div class="card-body">
            <h5 class="card-title">Curso PowerPoint</h5>
            <p class="card-text">Curso en el que se explicará desde los fundamentos y herramientas básicas de PowerPoint, hasta herramientas avanzadas y estructuración de presentaciones.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img src="word.jpg" class="card-img-top" alt="Curso 3">
          <div class="card-body">
            <h5 class="card-title">Curso Word</h5>
            <p class="card-text">Curso en el que se presentan fundamentos básicos de Word, estructuración de un documento y uso de herramientas de la aplicación.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>¡Inscríbete hoy!</h2>
          <p>Descubre una nueva forma de aprender con nuestros cursos en línea. Amplía tus habilidades y alcanza tus metas profesionales.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <a href="{{ url('alumnos/create')}}" class="btn btn-primary">Inscribirse</a>
        </div>
      </div>
    </div>
  <section class="py-5">
      <div class="container">
        <h2 class="mb-4">Sobre nuestra empresa</h2>
        <p>Somos una empresa dedicada a ofrecer cursos en línea de alta calidad para ayudar a las personas a adquirir nuevas habilidades y mejorar sus conocimientos en el uso de herramientas de productividad, como Microsoft Office.</p>
        <p>Nuestros cursos están diseñados por expertos en el campo y cubren una amplia gama de temas, desde los conceptos básicos hasta técnicas avanzadas. Nos enorgullece brindar contenido educativo que sea accesible, práctico y fácil de seguir.</p>
        <p>Creemos en el aprendizaje interactivo y práctico. Nuestros cursos incluyen ejercicios prácticos, proyectos y evaluaciones para asegurarnos de que los estudiantes puedan aplicar lo que aprenden en situaciones reales.</p>
        <p>Ya sea que estés buscando mejorar tus habilidades profesionales, aumentar tu productividad en el trabajo o explorar nuevas oportunidades laborales, nuestros cursos en línea te brindarán los conocimientos necesarios para tener éxito.</p>
        <a href="{{ url('/acerca')}}" class="btn btn-primary">Ver más</a>
      </div>
    </main>
    @endsection