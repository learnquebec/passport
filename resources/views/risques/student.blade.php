@extends('layouts.app')

@section('content')

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script>

    $(document).ready(function() {
       
        $(".search").change(function(){

            // check category id
            category_id = $("#categories").val();
            thematique_id = $("#thematiques").val();
            search_string = $("#search_string").val();
            console.log("Categorie: " + category_id + " Thematique: " + thematique_id + " Search string: " + search_string);
            if(thematique_id !=0){
                $(".risque").hide();
                $(".thematique[thematique_id='" + thematique_id +"']").parent().parent().show();
            }else{
                console.log("show all thematiques");
                $(".risque").show();
            }

            // loop through elements
            $( "tr.risque" ).each( function( index, element ){

                if(category_id !=0){
                    if($(this).attr('category_id') != category_id){
                        $(this).hide();
                    }
                    if(category_id ==1){
                        $("h2.category1").show();
                        $("h2.category2").hide();
                    }
                    if(category_id ==2){
                        $("h2.category1").hide();
                        $("h2.category2").show();
                    }
                }else{
                    $("h2.category").show();
                }
                if(search_string !=""){
                   risque_string = $(this).children(".risque_string").text();

                    if( risque_string.includes(search_string) ){
                        console.log("include: " + search_string);
                       // $(this).hide();
                    }else{
                    //    console.log("does not include: " + search_string);
                        $(this).hide();
                    }
                }
            });

            //$(".risque[category_id='" + this.value +"']").show();
            //console.log(search_string);

            
        });

    });

</script>
<div class="container">

    <div class="accordion" id="accordionPanelsStayOpenExample">
                <form id="add_risqs" method="post">
                    <fieldset>
                        <div class="mb-3">
                            <input id="search_string" type="text" class="form-control search" placeholder="Recherche par mot clé" />
                        </div>
                        <div class="mb-3">
                        <select class="form-control search" id="categories">
                            <option value="0">Recherche par categorie</option>
                            <option value="1">Par moi-même : seul.e ou en groupe (lire et produire)</option>
                            <option value="2">Avec d'autres (interaction)</option>

                            </select>
                        </div>
                        <div class="mb-3">
                        <select id="thematiques" class="form-control search">
                        <option value="0">Recherche par thématique</option>
                        <option value="1">Culture populaire</option>
                        <option value="2">Loisirs</option>
                        <option value="3">Média/Technologie</option>
                        <option value="4">Emploi/Bénévolat/Travail</option>
                        <option value="5">Autre</option>
                        </select>
                    </div>
                </fieldset>

                @foreach($categories as $category) 
                <h2 class="category category{{ $category->id }}" category_id="{{ $category->id }}">{{ $category->titre }}</h2>   
                <table class="table">
                @foreach($category->risques as $risque)
                        <tr class="risque" category_id="{{ $category->id }}">
                            <td><input name="risque[{{ $risque->id }}]" id="risque[{{ $risque->id }}]" class="form-check-input" type="checkbox" {{ (isset($data[$risque->id]) && ($data[$risque->id]->level=="3"))? "checked" : "" }}/></td>
                            <td class="risque_string">{{ $loop->iteration }}. {{ $risque->titre }}</td>
                            <td>
                                @foreach($risque->thematiques as $thematique)
                                <span class="badge bg-primary thematique" thematique_id="{{ $thematique->id }}">{{ $thematique->titre }}</span>
                                @endforeach
                            </td>
                        </tr>
                @endforeach
            </table>
            @endforeach
            <input type="submit" class="form-control" value="Ajouter un risque">
        </form>
  </div>

</div>



  
@endsection