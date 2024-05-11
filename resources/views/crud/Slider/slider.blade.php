@extends('layouts.master')
@section('title', 'slider')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Slider
                <a href="{{url('/admin/add-slider')}}" class="btn btn-primary btn-sm float-end">Add Slider</a>
            </h4>
        </div>
        <div class="card-body">
            <table id="myDataTable" class="table bordered">
                @csrf
                <thead>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($slider as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->heading}}</td>
                        <td>
                            <img src="{{asset('upload/slider/'. $item->image)}}" width="100px"
                                alt="Slider Image">
                        </td>
                        <td>
                            @if ($item->status == '1')
                            hidden
                            @else
                            visible
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{url('/admin/edit-slider/'.$item->id)}}"
                                class="btn btn-success btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('/admin/delete-slider/'.$item->id)}}"
                                class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
