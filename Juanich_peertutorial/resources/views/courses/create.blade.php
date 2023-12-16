@extends('base.base')

@section('content')
<h1>Create Course</h1>
<div class="col-md-5 mx-auto">
    <form action="{{url('courses/create')}}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="trainor_id">Select Trainor</label>
            <select name="trainor_id" id="trainor_id" class="form-select">
                <option hidden = "true"> Select Trainor</option>
                <option selected disabled> Select Trainor</option>
                    @foreach ($trainors as $trainorId => $trainor)
                        <option value="{{$trainorId}}">{{$trainor}}</option>
                    @endforeach
            </select>
            @error('trainor_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" required>
            @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary mt-2" type="submit">Add Course</button>
        </div>
    </form>
</div>
@endsection