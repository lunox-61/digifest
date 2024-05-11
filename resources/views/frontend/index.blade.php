@extends('layouts.logged2')

@section('hero')
<section id="hero-image" class="bg-dark text-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-marketing-text">
                    <h1 class="mb-4">About This</h1>
                    <p class="lead">
                        Baros International Animation Festival (BIAF) merupakan acara yang rutin diselenggarakan sebagai salah satu program Pemerintah Kota Cimahi dan bekerjasama dengan Cimahi Creative Association (CCA) dalam rangka membangun identitas Kota Cimahi sebagai pusat industri animasi di Indonesia. Baros International Animation Festifal (BIAF) merupakan tempat berkumpulnya para stakeholders dari industri hiburan dan animasi, yaitu studio animasi, pengembang game, comic artists, illustrators, media, agensi, pengembang perangkat lunak, merchandising, pengembangan industri IT, komunitas dan penikmat animasi.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JHS1wsV2T5k?si=qPYQKXsI42ofoHk6" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="text-center" style="">
    <!-- Grid container -->
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row justify-content-evenly">
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <img src="img/sample2.jpg" class="img-fluid" alt="">
                </div>
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <img src="img/Banner.png" class="img-fluid" alt="">
                    <div class="row justify-content-center p-4">
                        <ul class="">
                            <hr>
                            <li style="list-style-type: none">
                                <span class="title">Date</span>
                                <span class="text">13 ~ 14 September, 2023</span>
                            </li>

                            <hr>
                        </ul>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <br>
            <div class="row justify-content-evenly">
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Pengumuman</h4>
                    <hr>
                    <div class="row justify-content-evenly gy-5">
                        @forelse ($posts as $postitem)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/megaphone.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-truncate">{{$postitem->name}}</h5>
                                    <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
                                    <a href="{{asset('pengumuman/'.$postitem->slug)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                    <br>
                    <a href="{{url('pengumuman')}}" class="btn-sm float-end">Lihat Semua</a>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Jadwal</h4>
                    <hr>
                    <div class="row justify-content-evenly gy-5">
                        @forelse ($jadwal as $item)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/Calender.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-truncate">{{$item->title}}</h5>
                                <p class="fs-6"><i class="fa fa-calendar"></i>{{$item->created_at->format('d-m-Y')}}</p>
                                <a href="{{asset('jadwal/'.$item->slug)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                    <br>
                    <a href="{{url('jadwal')}}" class="btn-sm float-end">Lihat Semua</a>
                </div>
                <!--Grid column-->
            </div>
            <br>
            <div class="row justify-content-evenly">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Lokasi</h4>
                    <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.065180281802!2d107.5588895757957!3d-6.882795593116122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503b2cc0e5f%3A0x4b9960b40ccca083!2sMal%20pelayanan%20publik!5e0!3m2!1sid!2sid!4v1692717788753!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </section>
</div>
{{--
    <div class="iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.065180281802!2d107.5588895757957!3d-6.882795593116122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503b2cc0e5f%3A0x4b9960b40ccca083!2sMal%20pelayanan%20publik!5e0!3m2!1sid!2sid!4v1692717788753!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
--}}

@endsection
