@extends('layouts.master')
@section('title', 'Embed')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
        <h4>View Embed Links
            <a href="{{url('admin/add-embed')}}" class="btn btn-primary btn-sm float-end">Add Embed Links</a>
        </h4>
        </div>
        <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>Title</th>
                    <th>Embed Links</th>
                    <th>Created At</th>
                    <th>Action</th>
                </thead>
                @foreach ($embed as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->embed_links}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{url('admin/edit-embed/' .$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/delete-embed/' .$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
