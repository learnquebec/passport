@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mb-4">
                        
                        <!-- Pivot tables:  user_group, student_group -->
                        
                        <!-- Pivot tables: defi_risque, defi_etudiant, defi_groupe -->
                        <!-- a href="/risque" type="button" class="btn btn-primary">Ajouter un risque</a -->
                    </div>
                    <h3>Groupes</h3>
                    <div class="accordion accordion" id="accordionGroup">
                        @foreach($user->groups as $group)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $group->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $group->id }}" aria-expanded="true" aria-controls="collapse{{ $group->id }}">
                                    {{ $group->name }}
                                </button>
                              </h2>

                                <div id="collapse{{ $group->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $group->id }}" data-bs-parent="#accordionGroup">
                                    <div class="accordion-body">
                                        <div class="mb-4">
                                            <h4>Code du groupe: HGP123</h4>    
                                            <a href="#">https://passeport.learnquebec.ca/access?code=HGP123</a>
                                        </div>
                                    <h4>Défis</h4>
                                        <table class="table">
                                            <th>Titre</th>
                                            <th>Nombre de risques</th>
                                            <th>Progrès</th>
                                        @foreach($group->defis as $defi)
                                        <tr><td><a href="/defis/{{ $defi->id }}">{{ $defi->name }}</a></td><td>{{ $defi->number_of_risks }}</td><td>30%</td></tr>
                                        
                                        @endforeach
                                    </table>

                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          Associer ou créer un défi
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li>&nbsp;&nbsp;Personnalisés</li>
                                          <li><a class="dropdown-item" href="#">Défi 1</a></li>
                                          <li><a class="dropdown-item" href="#">Défi 2</a></li>
                                          <li><a class="dropdown-item" href="#">Nouveau défi</a></li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li>&nbsp;&nbsp;Prédéfinis</li>
                                          <li><a class="dropdown-item" href="#">Defi 3</a></li>
                                          <li><a class="dropdown-item" href="#">Defi 4</a></li>
                                        </ul>
                                      </div>
                                    <h4>Élèves</h4>
                                    (assignés en utilisant le code de groupe, devons-nous laisser l'enseignant ajouter des élèves)
                                    <ul>
                                        @foreach($group->users as $u)
                                        <li><a href="/user/{{ $u->id }}">{{ $u->last_name }}, {{ $u->first_name }}</a></li>
                                        @endforeach
                                    </ul>
                                    <a href="/defi"  type="button" class="btn btn-primary mb-4">Ajouter un élève</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="/groupes/create" type="button" class="btn btn-primary mb-4 mt-4">Créer un groupe</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
