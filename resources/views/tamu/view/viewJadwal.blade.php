@extends('layouts.homepage')

@section('content')
<div class="category-heading text-capitalized-left">
    <h1>{!! $jadwal->title !!}</h1> 
</div>
<br>
<div class="shadow p-3 mb-5 bg-body rounded">
    @if ($jadwal->author !== 'admin')
        <p>Diposting : {{ $jadwal->created_at->format('d/m/Y') }}</p>
    @endif
    <!-- Tombol berbagi menggunakan ikon Font Awesome -->
    <div class="btn-group">
        <span class="btn btn-secondary bg-facebook">Bagikan :</span>
        <button type="button" class="btn btn-secondary bg-facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" rel="noopener">
                <i class="fab fa-facebook text-white"></i>
            </a>
        </button>
        <button type="button" class="btn btn-secondary bg-instagram">
            <a href="https://www.instagram.com/stories/share/?url={{ url()->current() }}" target="_blank" rel="noopener">
                <i class="fab fa-instagram text-white"></i>
            </a>
        </button>
        <button type="button" class="btn btn-secondary bg-twitter">
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank" rel="noopener">
                <i class="fab fa-twitter text-white"></i>
            </a>
        </button>
        <button type="button" class="btn btn-secondary bg-whatsapp">
            <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank" rel="noopener">
                <i class="fab fa-whatsapp text-white"></i>
            </a>
        </button>
    </div>
</div>
<hr>
<div class="shadow p-3 mb-5 bg-body rounded">
    {!! $jadwal->description !!}
</div>
@endsection
