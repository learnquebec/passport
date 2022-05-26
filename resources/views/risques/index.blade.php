@extends('layouts.app')

@section('custom-scripts')

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

<script>
    $(document).ready(function() {
        table = $('#risque_table').DataTable( {
            "paging":   false,
            "ordering": false,
            "info":     false,
            "searching": false
        });
    });
</script>
@endsection

@section('content')

<div class="container">
    <table id="risque_table">
        <thead>
            <th>Id</th>
            <th>Risque</th>
            <th>Categorie</th>
            <th>Thématiques</th>
            <th></th>
            <th></th>
        </thead>
    @foreach ($risques as $risque)
        <tr>
            <td>{{ $risque->id }}</td>
            <td>{{ $risque->titre }}</td>
            <td>{{ $risque->categorie->titre }}</td>
            <td>
                @thematiques(['thematiques' => $risque->thematiques])@endthematiques
            </td>
            <td><a href="/risques/{{ $risque->id }}/edit"><button class="btn btn-primary">Edit</button></a></td>
            <td><button class="btn btn-danger">Delete</button></td>
        </tr>
    @endforeach
</table>
</div>
@endsection
