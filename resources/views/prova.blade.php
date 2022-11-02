@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="title">
        <h1>Trade NFTs, FREE</h1>
        <h4>100% trading fee rebate for all collections</h4> 
    </div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('image/img_nft/900x600.jpg') }}" class="w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/img_nft/900x600_nft.jpg') }}" class="w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/img_nft/01b7a91d-6bbe-463a-8317-30a7df695b83.jpg') }}" class="w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/img_nft/img_183305_crypto3aku_bg.jpg') }}" class="w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="subtitle2">
    <h3>Supported By</h3>
</div>
<div class="subtitle3">
    <h5>Our data providers and partners</h5>
</div>
</div>
</div>

@endsection