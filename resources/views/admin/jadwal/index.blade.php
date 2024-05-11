@extends('layouts.master')
@section('title', 'Jadwal')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Jadwal
                <a href="{{url('admin/add-jadwal')}}" class="btn btn-primary btn-sm float-end">Add Jadwal</a>
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
                    <th>state</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($jadwal as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->status == '1' ? 'Hidden': 'Visible'}}</td>
                        <td>
                            <a href="{{url('admin/edit-jadwal/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/delete-jadwal/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
