@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

        <div id="content-page" class="content-page">
            <div class="container-fluid">
        
                <div class="iq-card">
                    <div class="iq-card-body">
                        <form class="form" method="POST" action="{{ route('ct.store') }}" enctype="multipart/form-data">
                                        @csrf
                                       
                            <div class="col-lg-12">
                                <div class="iq-card-body">
                                    <div class="new-user-info">
                                    <div class="row">
                                        <div class="form-group row">
                                            <div class=" col-md-6">
                                                <label>Choisir enseignant/enseignement/option :</label>
                                                <select class="form-control select2"  name="enseignements" id="selectuserrole" required>
                                                    @foreach($enseignants as $enseignant)
                                                        <option value="@foreach($enseignant->enseignements as $enseignement) {{$enseignement->name}}  @endforeach">{{ $enseignant->name }} / @foreach($enseignant->enseignements as $enseignement) {{ $enseignement->name }} / {{$enseignement->option->name}}  @endforeach</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class=" col-md-6">
                                                <label>Choisir enseignant/enseignement/option :</label>
                                                <select class="form-control select2"  name="enseignant" id="selectuserrole" required>
                                                    @foreach($enseignants as $enseignant)
                                                        <option value="{{$enseignant->name}}">{{ $enseignant->name }} / @foreach($enseignant->enseignements as $enseignement) {{ $enseignement->name }} / {{$enseignement->option->name}}  @endforeach</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger enseignement" ></strong></span>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn btn-primary">Voir le cahier de texte</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
     
            </div>
        </div>
@endsection