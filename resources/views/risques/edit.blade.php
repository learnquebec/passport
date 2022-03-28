@extends('layouts.app')

@section('title','Éditer le risque')

@section('content')
    <div class="container">
    <form action="{{ route('risques.update',['risque' => $risque->id]) }}" method="POST">

        @csrf
        @method('PUT')
        @include("risques.partials.form")
        <div><input type="submit" value="Update" class="btn btn-primary"></div>
    </form>
</div>
@endsection