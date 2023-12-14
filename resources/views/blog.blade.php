<x-layouts.app>
    @guest
 
    <h1>Blog</h1>
<h2>para ver toda la informacion del blog debes iniciar sesion</h2>

@endguest

@auth
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-sm-12 col-lg-6">
                <h4 class="nav_top_align">
                    <i class="fa fa-th"></i>
                    Lista de clientes
                </h4>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fa fa-home"></i> Clientes Registrados 
                    </span>
                    <a href="{{ route('clientes.create') }}" class="btn btn-success ms-auto">
                        <i class="fas fa-plus"></i> Nuevo cliente
                    </a>
                    
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="sample_1" class="table display">
                            <thead>
                                <tr class="text-secondary">
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellidos Materno</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->apellido_paterno }}</td>
                                        <td>{{ $cliente->apellido_materno }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->correo }}</td>
                                        <td>
                                            <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-primary"><iconify-icon icon="bx:show"></iconify-icon></i></a>
                                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-success"></i><iconify-icon icon="bx:edit"></iconify-icon></a>
                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><iconify-icon icon="mdi:delete"></button>
                                            </form>
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
</div>

<!-- Agrega jQuery y DataTables JS -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" /> --}}

<script>
    $(document).ready(function() {
        $('#sample_1').DataTable();
    });
</script>


    @endauth
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</x-layouts.app>
