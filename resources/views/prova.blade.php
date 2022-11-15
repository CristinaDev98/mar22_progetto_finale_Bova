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

  <div class="container-card-home">
    <h3 style="margin-left: -1em; text-align: center;"><u>The Collection TOP</u></h3>
    <h5 style="margin: 2em; margin-right: 5em; text-align: center;">The best of the NFTs that had the best market volume</h5>
<div class="row" style="margin-left: 2.5em;">
    
    <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/720.webp') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>Ayori</b></p>
                </div>
            </div>
            </div>
        
        <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/Chibi_Valkyrie_800x800.png') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>Chibi Valkirie</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
        <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/unknown.png') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>The Purge</b></p>
                </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/logo.jpg') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>InakaTabi</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/Untitled840_4.jpg') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>Kudomachi</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em;">
                <img class="card-img-top" src="{{ asset('image/img_nft/dfgjdj_1.png') }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="text-align: center;"><b>Ceasars NFT</b></p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('nfts.create') }}">
      <div class="d-flex w-100 justify-content-center">
    <button class="button-29" role="button" type="submit" class="btn">See More</button></a>
  </div>
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