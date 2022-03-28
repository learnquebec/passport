@extends('layouts.app')

@section('title','Créez un nouveau risque')

@section('content')
<div class="container">
    <form action="{{ route('risques.store') }}" method="POST">

        @csrf
        @include('risques.partials.form')
        <div><input type="submit" value="Create" class="btn btn-primary"></div>
    </form>
    <div class="container">
@endsection