@extends('layouts.app')

@section('content')

<style>
    .i-circle {
        background: #000;
        color: #fff;
        padding: 0px 5px;
        border-radius: 50%;
    }
    .i-no-circle {
        background: #fff;
        color: #000;
        padding: 0px 5px;
        border-radius: 50%;
    }
</style>
<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Risques en cours
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>Risques en cours</h4>

                                @foreach($user->userRisques as $userRisque)
                                    <!-- risque template //-->
                                    <div class="card" style="width: 32rem;">
                                      <div class="card-body">
                                      <h5 class="card-title">{{ $userRisque->risque->titre }}</h5>
                                      <h6 class="card-subtitle mb-2 text-muted">Par moi-même : seul.e ou en groupe (lire et produire)</h6>
                                      
                                      <table>
                                        @foreach($userRisque->userRisqueDones as $done)
                                          <tr>
                                            <td>{{ $loop->iteration }}:&nbsp;</td>
                                            <td>
                                              @if($done->difficulty_id ==3)
                                              <span class="i-circle">E</span>
                                              @else
                                              <span class="i-no-circle">E</span>
                                              @endif
                                            </td>
                                            <td>
                                              @if($done->difficulty_id ==2)
                                              <span class="i-circle">M</span>
                                              @else
                                              <span class="i-no-circle">M</span>
                                              @endif
                                            </td>
                                            <td>
                                              @if($done->difficulty_id ==1)
                                              <span class="i-circle">F</span>
                                              @else
                                              <span class="i-no-circle">F</span>
                                              @endif
                                            </td>
                                          </tr>
                                         @endforeach
                                        </table>
                                      <p class="card-text"><b>Commentaires:</b> <br />
                                        @foreach($userRisque->userRisqueDones as $done)
                                        {{ $done->comment }}<br />
                                        @endforeach
                                      </p>
                                      
                                      <span class="badge bg-primary">Culture populaire</span>
                                      <span class="badge bg-primary">Autre</span>
                                      </div>
                                    </div>
                                    <!-- end risque template //-->
                                @endforeach
                                 <!-- risque template //-->
                                <!-- div class="card" style="width: 32rem;">
                                    <div class="card-body">
                                    <h5 class="card-title">J'ai écouté 5 chansons d'artistes canadiens en français.</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Par moi-même : seul.e ou en groupe (lire et produire)</h6>
                                    
                                    <table>
                                        <tr><td>1:&nbsp;</td><td><span class="i-circle">E</span></td><td><span class="i-no-circle">M</span></td><td><span class="i-no-circle">F</span></td></tr>
                                        <tr><td>2:&nbsp;</td><td><span class="i-no-circle">E</span></td><td><span class="i-circle">M</span></td><td><span class="i-no-circle">F</span></td></tr>
                                        <tr><td>3:&nbsp;</td><td><span class="i-no-circle">E</span></td><td><span class="i-no-circle">M</span></td><td><span class="i-no-circle">F</span></td></tr>
                                    </table>
                                    <p class="card-text">commentaires ... Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                    <span class="badge bg-primary">Culture populaire</span>
                                    <span class="badge bg-primary">Autre</span>
                                    </div>
                                </div //-->
                                 <!-- end risque template //-->

                                <a href="/risques" class="btn btn-primary mt-4">Ajouter un risque</a>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Risques complétés
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>Risques compétés</h3>
                                <a type="button" href="/risques" class="btn btn-primary mb-4">Ajouter un/des risques</a>
                                <div class="card" style="width: 32rem;">
                                    <div class="card-body">
                                    <h5 class="card-title">J'ai écouté 5 chansons d'artistes canadiens en français.</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Par moi-même : seul.e ou en groupe (lire et produire)</h6>
                                    
                                    <table>
                                        <tr><td>1:&nbsp;</td><td><span class="i-circle">E</span></td><td><span class="i-no-circle">M</span></td><td><span class="i-no-circle">F</span></td></tr>
                                        <tr><td>2:&nbsp;</td><td><span class="i-no-circle">E</span></td><td><span class="i-circle">M</span></td><td><span class="i-no-circle">F</span></td></tr>
                                        <tr><td>3:&nbsp;</td><td><span class="i-no-circle">E</span></td><td><span class="i-no-circle">M</span></td><td><span class="i-circle">F</span></td></tr>
                                    </table>
                                    <p class="card-text">commentaires ... Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                    <span class="badge bg-primary">Culture populaire</span>
                                    <span class="badge bg-primary">Autre</span>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Défis en cours
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>Faire 5 risques dans la catégorie Par moi-même</h5>
                                <div class="card" style="width: 32rem;">
                                    <div class="card-body">
                                    <h5 class="card-title">Progression:</h5>
                                    <p class="card-text">2 risque sur 5</p>
                                    <ul>
                                        <li>J'ai écouté 5 chansons d'artistes canadiens en français.</li>
                                        <li>J’ai lu une infolettre en français.</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
