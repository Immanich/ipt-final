@extends('base.base')

@section('content')
@if(session('message'))
  <div class="alert alert-success">{{session('message')}}</div>
@endif

<div class="d-grid grap-2 d-md-flex justify-content-end mb-3">
  <a href="{{url('/courses/create')}}" class="btn btn-primary mo-md-2" type="button">
    Add new course 
  </a>
</div>
  <div class="jumbotron">
    <table class="table table-bordered table-striped table">
      <thead>
        <tr>
            <th>ID</th>
            <th>TRAINOR'S NAME</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th style="text-align: center">MODIFY</th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->trainor->user->full_name}}</td>
                        <td>{{$course->title}}</td>
                        <td>{{$course->description}}</td>
                        <td class="text-center">
                          <a href="{{url('/courses/'.$course->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg></a>
                        </td>
                    </tr>
                @endforeach
      </tbody>
    </table>
  </div>
@endsection