@extends('layouts.app')


@section('title','Afficher le risque')

@section('content')
<div class="container">
        <div><h5>Risque</h5>{{ $risque['titre'] }}</div>
        <div><h5>Catégorie</h5>{{ $risque->categorie->titre}}</div>
        <div><h5>Thématiques</h5>
                @component('components.thematiques',['thematiques' => $risque->thematiques])@endcomponent
                @thematiques(['thematiques' => $risque->thematiques])@endthematiques
        </div>



        <a href="/risques/{{ $risque->id}}/edit">Edit</a>
</div>

@endsection