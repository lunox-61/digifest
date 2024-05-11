@extends('layouts.master')

@section('title', 'Edit Users')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Edit Post
                <a href="{{url('admin/users')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>

            @endif

            <form action="{{url('admin/update-user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Username</label>
                    <input type="text" name="username" value="{{$user->username}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Created At</label>
                    <p class="form-control">{{$user->created_at->format('d/m/Y')}}</p>
                </div>
                <div class="mb-3">
                    <Label>Role As</Label>
                    <select name="role_as" id="" class="form-control form-select">
                        <option value="1" {{$user->role_as == '1' ? 'selected':''}}>Admin</option>
                        <option value="0" {{$user->role_as == '0' ? 'selected':''}}>User</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
