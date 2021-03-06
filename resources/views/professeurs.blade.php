<?php     

use Illuminate\Support\Facades\DB; ?>

@extends('layouts.ap_front')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Professeurs</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home -> Professeurs </span></p>
          </div>
        </div>
      </div>
    </section>
<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">

                
                  @foreach($enseignants as $enseignant)
                  
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/back/images/avatar.png);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>{{$enseignant->name}}</h3>
                                <?php
                                    $enseignement = DB::table('enseignements')->select('name')->where('enseignant_id' , $enseignant->id)->first();
                                    
                                ?>
								<span class="position mb-2"> @if(!empty($enseignement->name) == null) Pas d'enseignementt @else Enseignant de {{$enseignement->name}} @endif </span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    </ul>
                                    
                                </div>
							</div>
						</div>
					</div>
                  @endforeach
				</div>
			</div>
		</section>
@endsection
