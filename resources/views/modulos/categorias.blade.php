@extends('welcome')

@section('contenido')
    <section class="content-header">
<<<<<<< HEAD
        <h1>Categorías</h1>
        <div class="text-right">
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Agregar Categoría</a>
        </div>
=======
        <h1>Categorias</h1>
>>>>>>> 3e452ff3a31586fa7de23ffca2b04147bf0c6b4f
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
<<<<<<< HEAD
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif
                
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar esta categoría?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay categorías registradas</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
=======
                <!-- Contenido de la página de Categorias -->
                <p>Bienvenido a la página de Categorias.</p>
            </div>
        </div>
    </section>
@endsection
>>>>>>> 3e452ff3a31586fa7de23ffca2b04147bf0c6b4f
