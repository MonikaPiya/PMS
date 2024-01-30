@extends('layouts.app')

@section('content')


<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- Preloader End -->
  
  <div id="main-wrapper" class="oxyy-login-register">
    <div class="hero-wrap min-vh-100">
      <div class="hero-mask">
      </div>
      {{-- <div class="hero-bg hero-bg-scroll" style="background-image:url('{{asset('assets/images/back_new.jpg')}}');"> --}}
       
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/back_new.jpg" style="height: 400px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/MedSync.jpg" style="height: 400px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/pp.jpg" style="height: 400px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/u.jpg" style="height: 400px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/e.jpg" style="height: 400px" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="details">
            <div class="card info-details">
                <div class="card-title">
                  <h3 class="text-center p-2 m-2"><strong>The Cure For The Common Drug Store</strong></h3>
                    <div class="card-body text-center"> 
                      <p class="p-2" >
                        Mamata Pharmacy is a locally-owned community pharmacy dedicated to providing outstanding customer service at an affordable price. We are your one-stop-shop for all your pharmacy and medical needs. At Mamata Pharmacy, you can count on personal attention provided by our caring, professional staff. Visit us today and experience the Mamata Pharmacy difference.
                      </p>
                    </div>
                </div>
                
              </div>
        </div>

      
      </div>
  </div>

  
  
  </div>

  <div class="footer">
          <p class="text-center p-2" >
           Copyright © 2022. All right reserved.
          </p>
        </div>
      </div>
  </div>
  

@endsection


<script>
  // Handle Bootstrap carousel slide event
  $('.carousel').carousel({
            interval: 100
        });
</script>