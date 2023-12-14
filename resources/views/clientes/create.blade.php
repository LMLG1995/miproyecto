<x-layouts.app>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
    
                   @include('clientes.formulario')
                    
    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    

</x-layouts.app>
