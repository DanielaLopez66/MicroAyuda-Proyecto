<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Candara&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Marmelad&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="material.css" rel="stylesheet" />
 
  <title>MATERIAL</title>
</head>

<body>
  <div class="fondo">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MICA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Inicio.php">Cerrar seción</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- titulo del material -->
    <div class="container">
      <div class="flor1">
        <img src="/imge/flor1.png" alt="">
      </div>
      <h3>MATERIAL DE APOYO</h3>
      <div class="flor2">
        <img src="/imge/flor2.png" alt="">
      </div>
    </div>
    <!-- CARDS DEL MATERIAL -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Deporte en la salud mental</h5>
            <p class="card-text">El deporte ayuda a desviar la mente de preocupaciones, fomentando la confianza, la
              interacción social, y el manejo saludable de problemas.</p>
              <button type="submit" class="go-info"><a href="DEPORTE.php">Entrar</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Ansiedad</h5>
            <p class="card-text">la ansiedad puede ser causada por preocupaciones sobre el rendimiento, cómo se perciben
              a sí mismos y cómo sienten que otros los perciben.
            </p>
            <button type="submit" class="go-info"><a href="ANSIEDAD.php">Entrar</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Salud mental</h5>
            <p class="card-text">problemas comunes de salud mental, como depresión, ansiedad, trastorno bipolar y
              esquizofrenia, y subraya la necesidad de recibir tratamiento adecuado, que puede incluir terapia,
              medicación, ejercicio, y una buena alimentación.</p>
              <button type="submit" class="go-info"><a href="MENTAL.php">Entrar</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Depresión</h5>
            <p class="card-text">
              los síntomas en adolescentes y adultos, que incluyen tristeza persistente,
              irritabilidad, pérdida de interés en actividades, cambios en el apetito y el sueño, y pensamientos
              suicidas. También se mencionan los cambios emocionales comunes en las personas con depresión, destacando
              la importancia de buscar ayuda profesional si los síntomas persisten.
            </p>
            <button type="submit" class="go-info"><a href="DEPRESIÓN.php">Entrar</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Autoestima</h5>
            <p class="card-text">la autoestima puede ser mejorada con el tiempo y que es fundamental para enfrentar
              desafíos con éxito. También se ofrecen consejos para mantener una buena autoestima, como ser amable
              contigo mismo, rodearte de personas que te apoyen, aceptar tus errores, y cuidar tu bienestar físico y
              emocional.
            </p>
            <button type="submit" class="go-info"><a href="autoestima.php">Entrar</a></button>
          </div>
        </div>
      </div>
    </div>
</body>

</html>