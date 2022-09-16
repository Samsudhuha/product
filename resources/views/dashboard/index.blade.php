@extends('layouts.home')

@section('title','Product')

@section('navbar')

@endsection

@section('sidebar')

@endsection

@section('custom-css')

@endsection

@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{url('img/logo.png')}}" alt="">
        <span>Product</span>
      </a>
      <div class="float-right">
          <a class="btn btn-info" href="/product">Manage Product</a>
      </div>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section>

      <div class="container">

        <header class="section-header">
          <p>Produk</p>
        </header>
      

        <div class="row gy-4 portfolio-container">

          @foreach ($categories as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{$item->image}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$item->nama}}</h4>
                  <div class="portfolio-links">
                    <a href="{{$item->image}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$item->nama}}"><i class="bi bi-plus"></i></a>
                    <a href="/products/{{$item->id}}" title="Lihat"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection

@section('custom-js')

@endsection