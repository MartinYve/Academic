@extends('layouts.app_back')

@section('content')
<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                                <div class="d-flex d-flex align-items-center justify-content-between">
                                   <div>
                                       <h2>{{$etudiants}}</h2>
                                       <p class="fontsize-sm m-0">Etudiants de l'école</p>
                                   </div>
                                   <div class="rounded-circle iq-card-icon dark-icon-light iq-bg-primary "> <i class="ri-inbox-fill"></i></div>
                                </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
<<<<<<< HEAD
                                  <h2>32%</h2>
=======
                                  <h2>{{$enseignantsV}}</h2>
>>>>>>> 8202aca1c6f3d2d11d47e80965cd89d44412115e
                                  <p class="fontsize-sm m-0">Enseignants Vacataires</p>
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-radar-line"></i></div>
                           </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
<<<<<<< HEAD
                                  <h2>32%</h2>
=======
                                  <h2>{{$enseignantsT}}</h2>
>>>>>>> 8202aca1c6f3d2d11d47e80965cd89d44412115e
                                  <p class="fontsize-sm m-0">Enseignants Titulaires</p>
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-warning "><i class="ri-price-tag-3-line"></i></div>
                           </div>
                       </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch ">
                        <div class="iq-card-body">
                           <div class="d-flex d-flex align-items-center justify-content-between">
                              <div>
<<<<<<< HEAD
                                  <h2>32%</h2>
                                  <p class="fontsize-sm m-0">Nombre<br>de classe</p>
=======
                                  <h2>10</h2>
                                  <p class="fontsize-sm m-0">Nombres de classe</p>
>>>>>>> 8202aca1c6f3d2d11d47e80965cd89d44412115e
                              </div>
                              <div class="rounded-circle iq-card-icon iq-bg-info "><i class="ri-refund-line"></i></div>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-7">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Invoice Stats</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" >
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                        <div id="home-chart-02"></div>
                     </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-5">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="background: transparent;">
                        <div class="iq-card-body rounded p-0" style="background: url(back/images/page-img/01.png) no-repeat;    background-size: cover; height: 415px;">
                          <div class="iq-caption">
                             <h1>450</h1>
                             <p>Invoice</p>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
              
         </div>
@endsection
