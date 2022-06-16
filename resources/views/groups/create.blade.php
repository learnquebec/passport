@extends('layouts.app')

@section('title','Créez un nouveau groupe')

@section('content')
<div class="container">
    <form action="{{ route('groups.store') }}" method="POST">

        @csrf
        @include('group.partials.form')
        <div><input type="submit" value="Create" class="btn btn-primary"></div>
    </form>
    <div class="container">
@endsection