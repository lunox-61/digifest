@extends('layouts.master')

@section('title', 'Category')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">Add Category</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>

            @endif

            <form action="{{url('admin/post-category')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="your_summernote" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <h6>SEO Tag</h6>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" id="" rows="10" class="form-control"></textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" class="navbar-status">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" class="status">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
