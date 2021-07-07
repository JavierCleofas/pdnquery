@extends('layouts.principal')

@section('content')
<div class="" style="height: 82px; background-color: black;">    
</div>
<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $dat)
        <tr>
            <td>{{ $dat->_id }}</td>
            <td>{{ $dat->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $datos->links() }}    
</div>

@endsection