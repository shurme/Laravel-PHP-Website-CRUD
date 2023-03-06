@extends("products.layout")

@section("content")
<div class="row">
    <div class="col-lg-l2 margin-tb">
        <div class="pull-left">
            <h2> Mostrar Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detalhes:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>

@endsection