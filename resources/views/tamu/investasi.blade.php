@extends('layouts.homepage')

@section('content')
<div class="shadow p-3 mb-5 bg-body rounded">
<section class="video">
    <div class="row text-center">
        <h2>Videos</h2>
    </div>
    <hr>
    <div class="grid-container">
        @forelse ($embed as $item)
        <div class="iframe-container">
            <iframe width="100%" height="100%"src="{{$item->embed_links}}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        </div>
        @empty
            <h5>No Content</h5>
        @endforelse
    </div>
</section>
</div>
@endsection
