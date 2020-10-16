{{-- colocar este conteúdo em um template principal. No nome deve ser passao o path do template --}}
@extends('admin.layouts.app')

{{-- section que será injetada no template. O nome deve ser o mesmo do @yield --}}
@section('content')
    <h1>Exibindo os produtos</h1>

    {{ $teste }}
@endsection
