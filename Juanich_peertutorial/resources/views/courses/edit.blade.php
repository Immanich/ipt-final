@extends('base.base')

@section('content')
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">
                    Delete Course - {{$course->title}}
                </h1>
                <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('courses/delete/' . $course->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this course?
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-danger">Delete Course</button>
            </div>
            </form>
        </div>
    </div>
</div>

<h1>Edit Course</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('courses/'.$course->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" value="{{$course->id}}" selected disabled>
                @error('id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="full_name">Trainor's Name</label>
                <input type="text" name="full_name" class="form-control" value="{{$course->trainor->user->full_name}}" selected disabled>
                @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$course->title}}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{$course->description}}">
                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit">
                    Update Course
                </button>
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                    Delete Course
                </button>
            </div>
        </form>
    </div>
</div>
@endsection