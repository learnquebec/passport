@extends('layouts.app')

@section('content')
<div class="container">

    <div class="accordion" id="accordionPanelsStayOpenExample">
                <form>
                    <fieldset>
                        <div class="mb-3">
                            <input id="search" type="text" class="form-control" placeholder="Recherche par mot clé" />
                        </div>
                        <div class="mb-3">
                        <select class="form-control">
                            <option>Recherche par categorie</option>
                            <option value="1">Par moi-même : seul.e ou en groupe (lire et produire)</option>
                            <option value="2">Avec d'autres (interaction)</option>

                            </select>
                        </div>
                        <div class="mb-3">
                        <select class="form-control">
                        <option>Recherche par thématique</option>
                        <option value="1">Culture populaire</option>
                        <option value="2">Loisirs</option>
                        <option value="3">Média/Technologie</option>
                        <option value="4">Emploi/Bénévolat/Travail</option>
                        <option value="5">Autre</option>
                        </select>
                    </div>
                </fieldset>

                @foreach($categories as $category) 
                <h2>{{ $category->titre }}</h2>   
                <table class="table">
                @foreach($category->risques as $risque)
                        <tr category_id="{{ $category->id }}">
                            <td><input name="risque[{{ $risque->id }}]" id="risque[{{ $risque->id }}]" class="form-check-input" type="checkbox" {{ (isset($data[$risque->id]) && ($data[$risque->id]->level=="3"))? "checked" : "" }}/></td>
                            <td>{{ $loop->iteration }}. {{ $risque->titre }}</td>
                        </tr>
                @endforeach
            </table>
            @endforeach
        </form>
  </div>

</div>



  
@endsection