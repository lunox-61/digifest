@extends('layouts.homepage')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Jadwal</h4>
</div>
<hr>
<div class="row justify-content-evenly gy-5">
    @forelse ($jadwal as $item)
    <div class="card" style="width: 18rem;">
      <img src="{{asset('img/Calender.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-truncate">{{$item->title}}</h5>
        <p class="fs-6"><i class="fa fa-calendar"></i>{{$item->created_at->format('d-m-Y')}}</p>
        <a href="{{asset('main-jadwal/'.$item->slug)}}" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
    @empty

    @endforelse
</div>
<div class="paginate">
    {{ $jadwal->links('pagination::bootstrap-4') }}
</div>
{{--
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><a href="{{asset('main-jadwal/'.$item->slug)}}" class="text-dark">{{$item->title}}</a></div>
        </div>
        <span class="badge text-dark">{{$item->created_at->format('d-m-Y')}}</span>
      </li>
--}}
@endsection
