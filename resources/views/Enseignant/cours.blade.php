@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <form class="form" method="POST" action="{{route('cours.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title"> @if ($route == 'cours.index') Créer un cours @elseif($route == 'devoirs.index') Créer un devoir</h4>
                                </div>
                                </div>
                                    <div class="iq-card-body">
                                        <div  id="elm">
                                            <div class="copie">
                                            <hr>
                                            <h5 class="mb-3"></h5>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="fname">Name:</label>
                                                        <input placeholder="Nom de enseignement" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                                            name="name" id="name" value="@if($route == 'cours.index'){{old('name')}}@else{{$cours->name}}@endif" required />
                                                        @error('name')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Choisir le cours :</label><br>
                                                       
                                                        <input type="file"  name="file" id="file" class="upload-button btn iq-bg-primary form-control-solid" accept=".doc, .pdf, .txt">
                                                        <!-- <input type="file" class="form-control form-control-solid @error('file') is-invalid @enderror" name="file" id="file" value="@if($route == 'cours.index'){{old('credit')}}@else{{$cours->file}}@endif" required /> -->
                                                        @error('file')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger credit" ></strong></span>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Choisir la sale de class:</label>
                                                        <select class="form-control select2"  name="option" id="selectuserrole" required>
                                                        @foreach($enseignements as $id => $enseignement)
                                                        <option value="{{ $enseignement->option->id }}">{{ $enseignement->name }}/{{ $enseignement->option->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" style="margin-left:400px; margin-top:20px;" value="publier" class="btn btn-primary mb-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
