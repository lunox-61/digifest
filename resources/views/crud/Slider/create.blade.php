@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Slider
                <a href="{{url('/admin/crud-slider')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('status'))
            <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif
            <form action="{{url('/admin/store-slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Heading</label>
                    <input type="text" name="heading" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Link Name</label>
                    <input type="text" name="link_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Slider Image Upload</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="checkbox" name="status"> 0-visible, 1-hidden
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
