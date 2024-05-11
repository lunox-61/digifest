@extends('layouts.master')
@section('title', 'Add Embed Link')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">Add Embed Links</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{url('admin/store-embed')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="10" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Embed Links</label>
                    <input type="text" name="embed_links" class="form-control">
                    <p class="fs-6 text-success"><i class="fa-solid fa-circle-exclamation"></i>
                        Contoh : https://www.youtube.com/embed/zpOULjyy-n8</p>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
