<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="funcionamiento.php">    
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">apellido</label>
            <input type="text" class="form-control"  name="apellido" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">tlf Contacto</label>
            <input type="number" class="form-control"  name="contacto" id="exampleInputPassword1">
        </div>
        <div>
            <label for="">nivel de estudio</label>
                <select class="form-select" name="nivele" aria-label="Default select example">
                    <option selected>selecciona</option>
                    <option value="1">bachiller</option>
                    <option value="2">tecnicp</option>
                    <option value="3">Tecnologo</option>
                    <option value="1">profesional</option>
                    <option value="2">estudiante</option>
                    <option value="3">universitario</option>
                    
                </select>
        </div>
        <div>
            <label for="">nivel de ingles</label>
                <select class="form-select" name="ingles" aria-label="Default select example">
                    <option selected>selecciona</option>
                    <option value="1">basico</option>
                    <option value="2">intermedio</option>
                    <option value="3">avanzado</option>
                    
                </select>
        </div>
        <div>
            <label for=""> selecciona tus conocimientos en programacion</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="CSS" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        CSS
                    </label>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="PYTHON" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        PYTHON
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="c#" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        c#
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HTML" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        HTML
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="PHP" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        PHP
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HTML" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        TYPESCRIPT
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="JS" id="flexCheckDefault" name="lenguaje[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        JS
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="NODE JS" id="flexCheckDefault" name="lenguaje[] ">
                    <label class="form-check-label" for="flexCheckDefault">
                        NODE JS
                    </label>
            </div>
        </div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>
        <button type="submit" class="btn btn-primary">guardar</button>
        <button type="reset" class="btn btn-primary">borrar</button>
    </form>
</body>
</html>