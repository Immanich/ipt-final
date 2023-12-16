@extends('base.base')

@section('content')
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">
                    Delete Trainee - {{$trainee->user->full_name}}
                </h1>
                <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('trainees/delete/' . $trainee->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this trainee?
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-danger">Delete Trainee</button>
            </div>
            </form>
        </div>
    </div>
</div>
<h1>Edit Trainee</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/trainees/'.$trainee->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" value="{{$trainee->id}}" selected disabled>
                @error('id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="full_name">Trainee</label>
                <input type="text" name="full_name" class="form-control" value="{{$trainee->user->full_name}}" selected disabled>
                @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$trainee->course->title}}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{$trainee->status}}">
                @error('status')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit">
                    Update User
                </button>
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                    Delete User
                </button>
            </div>
        </form>
    </div>
</div>
@endsection