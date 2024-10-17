<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73b3fda649.js" crossorigin="anonymous"></script>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Simulador de Puntaje</title>
    <link rel="stylesheet" type="text/css" href="calculadora12.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center m-4 mt-5 fs-1 fs-md-1">Simulador de Puntajes UMAG</h1>
            <h5 class="w-100 w-md-75 text-center fs-5 fs-md-5 mb-3">Aquí podrás simular tus puntajes de ingreso a la Universidad de Magallanes para el proceso de admisión 2024. Ingresa tus puntajes de la PAES en los casilleros correspondientes (recuerda considerar un número entre 100 y 1000).</h5>
            <div class="section mt-4">
                <div class="info container-lg">
                    <form action="calculos.php" method="POST" class="text-center justify-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="nem" class="form-label">Notas de Enseñanza Media (NEM): *</label>
                                <input type="number" name="nem" class="form-control" placeholder="100" id="nem" min="100" max="1000" value="100" required="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="ranking" class="form-label">Ranking: *</label>
                                <input type="number" name="ranking" class="form-control" placeholder="100" id="ranking" min="100" max="1000" value="100" required="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="clectora" class="form-label">Competencia Lectora: *</label>
                                <input type="number" name="clectora" class="form-control" placeholder="100" id="clectora" value="100" min="100" max="1000" required="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="cmatematica1" class="form-label">Competencia Matemática 1 (M1): *</label>
                                <input type="number" name="cmatematica1" class="form-control" placeholder="100" id="cmatematica1" value="100" min="100" max="1000" required="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="chistoria" class="form-label">Historia y Ciencias Sociales: **</label>
                                <input type="number" name="chistoria" class="form-control" placeholder="0" id="chistoria" value="0" min="0" max="1000" required="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="cciencias" class="form-label">Ciencias: **</label>
                                <input type="number" name="cciencias" class="form-control" placeholder="0" id="cciencias" value="0" min="0" max="1000" required="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="cmatematica2" class="form-label">Competencia Matemática 2 (M2): **</label>
                                <input type="number" name="cmatematica2" class="form-control" placeholder="0" id="cmatematica2" value="0" min="0" max="1000" required="">
                            </div>
                            <div class="row m-3">
                                <div class="text-center">
                                    <button type="reset" class="btn btn-light">Limpiar campos</button>
                                    <button type="submit" class="btn btn-primary" name="simular">Hacer Simulación</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h4 class="w-100 w-md-75 mt-4 text-center fs-6 fs-md-5"><strong>(*) Campo obligatorio (la nueva escala va desde el 100 al 1000).</strong></h4>
            <h4 class="w-100 w-md-75 text-center fs-6 fs-md-5"><strong>(**) Si no rendiste una prueba determinada ingresa un 0 (cero).</strong></h4>
        </div>
    </div>
    <br>
    <footer>

    </footer>
</body>

</html>