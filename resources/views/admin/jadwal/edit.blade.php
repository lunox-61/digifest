@extends('layouts.master')

@section('title', 'jadwal')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">
                Edit Jadwal
            </h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>

            @endif

            <form action="{{url('admin/update-jadwal/'. $jadwal->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{$jadwal->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$jadwal->slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="your_summernote" rows="10" class="form-control">{!! $jadwal->description !!}</textarea>
                </div>

                <h6>Status</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input name ="status" type="checkbox" class="form-control form-check-input" {{$jadwal->status == '1' ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Jadwal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
