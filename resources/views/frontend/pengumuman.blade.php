@extends('layouts.logged')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Pengumuman</h4>
</div>
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
<div class="paginate">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>
{{--
    <a href="{{asset('pengumuman/'.$postitem->slug)}}" class="text-dark">{{$postitem->name}}</a>
    <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
--}}
{{--
    <a href="{{asset('pengumuman/'.$postitem->slug)}}" class="text-dark">{{$postitem->name}}</a>
    <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
--}}
{{--
<div class="grid-container">
<div class="card" style="width: 18rem;">
  <img src="{{asset('img/megaphone.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
--}}
@endsection
