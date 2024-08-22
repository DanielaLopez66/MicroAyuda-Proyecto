<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="regsitro.css">
</head>

<body>
    <div class="fondo">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="Inicio.html">MICA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="secion.html">Iniciar seción</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="circulo4"></div>
        <!-- Registro -->
        <form class="row g-3" method="POST">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="validationDefault01" name="Nombre"  required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Apellido/os</label>
              <input type="text" class="form-control" id="validationDefault02" name="Apellido" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefaultUsername" class="form-label">Correo</label>
              <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="aguz@gmail.com" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">Edad</label>
              <input type="number" class="form-control" id="validationDefault03" name="Edad" required>
            </div>
            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="password" class="form-control" id="validationDefault05" name="contrasena" required>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="registrar"> <a href="HOME.php">Registrar</a></button>
            </div>
        </form>
         
        <div class="circulo5"></div>

        <div class="mica">
            <img src="/imge/MICA.png" alt="">
        </div>

        <div class="circulo2"></div>
        <div class="circulo3"></div>
        <div class="circulo6"></div>
    </div>
</body>

</html>
<?php
include("conexion.php");
if(isset($_POST['registrar'])){
    if(strlen($_POST['email'])>=1 && strlen($_POST['contrasena'])>=1 
    && strlen($_POST['Nombre'])>=1 && strlen($_POST['Apellido'])>=1
    && strlen($_POST['Edad'])>=1){
        $email=trim($_POST['email']);
        $contrasena=trim($_POST['contrasena']);
        $Nombre=trim($_POST['Nombre']);
        $Edad=trim($_POST['Edad']);
        $Apellido=trim($_POST['Apellido']);
        $consulta="INSERT INTO usuarios(email, contrasena, Nombre, Edad, Apellido) 
        VALUES ('$email', '$contrasena', '$Nombre', '$Edad', '$Apellido')";
        $resultado= mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Registro exitoso!</h3>
            <?php
        }
        else{
            ?>
            <h3 class="bad">¡Ocurrio un error!</h3>
            <?php
        }
    }
}
?>