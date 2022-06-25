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
                    <h5 class="card-title">Facturación de Productos</h5>
                    <h6 class="card-subtitle text-muted">Tiene un Plazo de 30 Días para Reclamar su Respectiva Factura.</h6>
                </div>
                <div class="card-body">
                    <form method = "post" action = "{{url('Productos/Guardar')}}"> 
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre del Producto</label>
                            <input type="text" name= "nombre_produc" class="form-control" placeholder="">
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
    
        <div class="container-fluid">
    
            <div class="row">
                <div class="col-8" style="margin: 20px 0; position: relative; left: 270px;">
                    <div class="card" style="border: rgb(55, 255, 0) solid 2px">
                        <div class="card-header">
                            <h5 class="card-title">Lista de Registro Factura</h5>
                            <h6 class="card-subtitle text-muted">Para Mayor Información Acerca de su Producto Ingrese Aquí 
                                    <a href="http://www.espam.edu.ec/web/universidad/calendario.aspx" target="_blank"
                                    >Aquí</a>.</h6>
                        </div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead style="background: lightcoral">
                                    <tr>
                                        <th>Nombre Producto</th>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                        <th>Imagen</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($V as $item)
                                    <tr>
                                        <td>{{$item->Nombre_Producto}}</td>
                                        <td>{{$item->Descripcion_Producto}}</td>
                                        <td>{{$item->Cantidad_Producto}}</td>
                                        <td>{{$item->Imagen_Producto}}</td>
                                        <td>
                                            <a href="{{url('Productos'. $item->id)}}"><i class="align-middle"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Feedbin-Icon-home-edit.svg/1200px-Feedbin-Icon-home-edit.svg.png" alt="" width="25px" height="25px"></i></a>
                                            <a href="#"><i class="align-middle"><img src="https://cdn-icons-png.flaticon.com/512/90/90377.png?w=360" width="25px" height="25px" alt=""></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
