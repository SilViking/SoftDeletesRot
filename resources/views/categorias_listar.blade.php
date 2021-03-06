@extends('layout.base', ["current"=>"categorias"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->nome }}</td>
                <td>
                  <form action = "{{ route('categorias.destroy', $cat->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('categorias.edit', $cat->id) }}">Editar</a>
                    @method('DELETE')
                    <button type = "submit" class="btn btn-danger">Excluir</button>
                  </form>
                </td>
                </td>                   
            </tr>          
            @endforeach     
        </tbody>
      </table>
@endsection