@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

        <div id="content-page" class="content-page">
            <div class="container-fluid">
        
                <div class="iq-card">
                    <div class="iq-card-body">
                        <form class="form" method="POST" action="{{ route('devoirs.store') }}" enctype="multipart/form-data">
                                        @csrf
                                       
                            <div class="col-lg-12">
                                <div class="iq-card-body">
                                    <div class="new-user-info">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Choisir enseignement / option :</label>
                                            <select class="form-control select2"  name="enseignement" id="selectuserrole" required>
                                                @foreach($enseignements as $enseignement)
                                                    <option value="{{ $enseignement->name }}">{{ $enseignement->name }} / {{ $enseignement->option->name }}</option>
                                                @endforeach
                                            </select>
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
