@extends('layouts.app')

@section('title','Éditer le groupe')

@section('content')
    <div class="container">
    <form action="{{ route('groupes.update',['groupe' => $group->id]) }}" method="POST">

        @csrf
        @method('PUT')
        @include("groups.partials.form")
        <div><input type="submit" value="Update" class="btn btn-primary"></div>
    </form>
</div>
@endsection