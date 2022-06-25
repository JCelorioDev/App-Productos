<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="overflow-x: hidden">
    <div class="row">

        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edición de Productos</h5>
                    <h6 class="card-subtitle text-muted">Tiene un Plazo de 30 Días para Reclamar su Respectiva Factura.</h6>
                </div>
                <div class="card-body">
                    <form method = "post" action = "{{url('Productos/Edicion'.$V->id)}}"> 
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre del Producto</label>
                            <input type="text" value="{{$V->Nombre_Producto}}" name= "nombre_produc" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción del Producto</label>
                            <input type="text" class="form-control" name="descripcion_produc" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad del Producto</label>
                            <input type="text" class="form-control" name="cantidad_produc" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen del Producto</label>
                            <input type="text" class="form-control" name="imagen_produc" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar Producto</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>