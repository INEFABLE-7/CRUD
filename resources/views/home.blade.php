


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/S.css') }}">
</head>
<body>
    
    <div class="temad">
        <h1 class="TEMA">TIENDA VIRTUAL</h1>
    </div>


    <h3>PRODUCTO</h3>

    <form action="AMAZON.php" method="post">

        <h2> </h2>
        <label for="tip_produ">Tipo de producto:</label>
        <select id="tip_produ" name="tip_produ">
            <option value="laptop">LAPTOP</option>
            <option value="usb">USB</option>
            <option value="impresora">IMPRESORA</option>
            <option value="telefono">TELÉFONO</option>
            <option value="tablet">TABLET</option>
            <option value="camara">CÁMARA</option>
            <option value="placa_laptop">PLACA DE LAPTOP</option>
            <option value="otros">OTROS</option>
        </select><br><br>

        <label for="descripcion">Descripción del producto:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" placeholder="Pedido del cliente" required></textarea><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" placeholder="Ingrese cantidad encargada" required><br><br>

        <label for="precio">Precio estimado:</label>
        <input type="number" id="precio" name="precio" step="0.01" placeholder="Precio" required><br><br>

        <input type="submit" name="submit" value="REGISTRAR">

        <input type="reset" id="botonpasar" name="limpiar" value="LIMPIAR CAMPOS">

        
    </form>





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">JEAN </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>VUELVA PRONTO(INEFABLE-7)</p>

                        <!-- Botón de Cerrar Sesión -->
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="logout-button">Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>






