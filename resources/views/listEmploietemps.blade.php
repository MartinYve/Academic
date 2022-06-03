



@extends('layouts.appP')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Emplois de temps {{$option->name}} </h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                           </div>
                           <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>heure</th>
                                    <th>Lundi</th>
                                    <th>Mardi</th>
                                    <th>Mercredi</th>
                                    <th>Jeudi</th>
                                    <th>Vendredi</th>
                                    <th>Samedi</th>
                                    <th>Dimanche</th>
                                 </tr>
                             </thead>
                             <tbody>
                                <tr>
                                    <th> <p style="display: none;" >a</p> 7H00/10H00</th>   
                                   <th>
                                        @foreach ($option->Enseignements as $key2 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @elseif($key2 == $count)
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                   </th>  
                                    <th>
                                        @foreach ($option->Enseignements as $key4 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach   
                                    </th>
                                    <th>
                                        @foreach ($option->Enseignements as $key5 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach 
                                    </th>  
                                    <th>
                                        @foreach ($option->Enseignements as $key6 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "7H00" && $value->heure_fin == "10H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>    
                                <tr>
                                    <th> <p style="display: none;" >b</p>  10H00/13H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "10H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>    
                                <tr>
                                    <th> <p style="display: none;" >c</p> 13H00/16H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "13H00" && $value->heure_fin == "16H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr> 
                                <tr>
                                    <th> <p style="display: none;" >d</p>  16H00/19H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "16H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>
                             </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>


<!-- DataTables  & Plugins -->


@endsection