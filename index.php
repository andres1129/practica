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
    <form>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">apellido</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">tlf Contacto</label>
            <input type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <div>
            <label for="">nivel de estudio</label>
                <select class="form-select" aria-label="Default select example">
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
            <label for=""> selecciona tus conocimientos en programacion</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="CSS" id="flexCheckDefault" name="CSS">
                    <label class="form-check-label" for="flexCheckDefault">
                        CSS
                    </label>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="PYTHON" id="flexCheckDefault" name="PYTHON">
                    <label class="form-check-label" for="flexCheckDefault">
                        PYTHON
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="c#" id="flexCheckDefault" name="C#">
                    <label class="form-check-label" for="flexCheckDefault">
                        c#
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HTML" id="flexCheckDefault" name="HTML">
                    <label class="form-check-label" for="flexCheckDefault">
                        HTML
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="PHP" id="flexCheckDefault" name="PHP">
                    <label class="form-check-label" for="flexCheckDefault">
                        PHP
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HTML" id="flexCheckDefault" name="TYPESCRIPT">
                    <label class="form-check-label" for="flexCheckDefault">
                        TYPESCRIPT
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="JS" id="flexCheckDefault" name="JS">
                    <label class="form-check-label" for="flexCheckDefault">
                        JS
                    </label>
            </div>
            </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" value="NODE JS" id="flexCheckDefault" name="NODE JS">
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
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>