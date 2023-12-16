@extends('base.base')

@section('content')
<h1>Create Trainor</h1>
<div class="col-md-5 mx-auto">
    <form action="{{url('trainors/create')}}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="user_id">Select User</label>
            <select name="user_id" id="user_id" class="form-select">
                <option hidden = "true">Select User</option>
                <option selected disabled> Select User</option>
                @foreach ($users as $userId => $user)
                    <option value="{{$userId}}">{{$user}}</option>
                @endforeach
            </select>
            @error('user_id')
            
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="specialty"> Specialty</label>
            <input type="text" name="specialty" id="specialty" class="form-control" required>
            @error('specialty')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary mt-2" type="submit"> Add Trainor</button>
        </div>
    </form>
</div>
@endsection