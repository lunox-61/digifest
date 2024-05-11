@extends('layouts.master')
@section('title', 'Add Embed Link')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">Edit Embed Links
                <a href="{{url('admin/embed')}}" class="btn btn-danger btn-sm float-end">Back</a>
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

            <form action="{{url('admin/update-embed/'.$embed->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{$embed->title}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="10" class="form-control">{{$embed->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="">Embed Video</label>
                    <br>
                    <iframe width="560" height="500" class="form-control" src="{{$embed->embed_links}}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
