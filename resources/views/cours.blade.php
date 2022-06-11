@extends('layouts.ap_front')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Cours</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
@foreach($cours as $cour)
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">{{$cour->name}}</h3>
                    <tr>
												<td style="background-color: #3d8afd; padding: 12px 35px;" align="center" class="ctaButton"> <a href="{{ route('cours.edit', $cour->id) }}" style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" class="text">Voir le cour</a></td>
										</tr>
                </div>
            </div>
        </div>
      </div>
</section>
@endforeach
@endsection