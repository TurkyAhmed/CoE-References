@extends('layouts.mainLayout')
@section('content')

<div class="container">
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{route('references.course-references', $course->id)}}">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <i class="fa-regular fa-folder"></i>
                        <div class="card-body">
                          <p class="card-text"> {{$course->subject->name .'_'. $course->teacher->name}}</p>
                        </div>
                    </a>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
