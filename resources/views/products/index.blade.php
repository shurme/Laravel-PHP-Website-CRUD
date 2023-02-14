@extends('products.layout')

@section('content')

    <div class="row"> 
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Lista de Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"
                    href="{{ route('products.create') }}"> Adicionar Produto</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success')) 
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered"> 
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Detalhes</th> 
            <th width="280px">Ação</th>
        </tr>
        @foreach ($products as $product) 
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ Sproduct->name }}</td>
            <td>{{ $product->detail }}</td> <td>
                <form action="{{ route('products.destroy',Sproduct->id) }}" method="POST"> 
                    <a class="btn btn-info" href="{{ route('products.show',Sproduct->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',Sproduct->id) }}">Editar</a>
                    @csrf 
                    @method ("DELETE') 
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}

@endsection
