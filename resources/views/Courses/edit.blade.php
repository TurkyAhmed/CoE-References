@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> الكورسات :</h3>
        <h5>  تعديل الكورس  </h5>

        <form action="{{route('courses.update',$course->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="subject_id" class="form-label"> المادة </label>
                <select class="form-select" name="subject_id" aria-label="Default select example">
                    <option selected disabled>اختار المادة</option>
                    @foreach ($subjects as $subject )
                        <option value="{{$subject->id}}" {{$course->subject_id == $subject->id ? 'selected' : ''}}>{{$subject->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3">
                <label for="teacher_id" class="form-label"> المحاضر </label>
                <select class="form-select" name="teacher_id" aria-label="Default select example">
                    <option selected disabled>اختار المحاضر</option>
                    @foreach ($teachers as $teacher )
                        <option value="{{$teacher->id}}" {{$course->teacher_id == $teacher->id ? 'selected' : ''}}>{{$teacher->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3">
                <label for="level_id" class="form-label"> المستوى </label>
                <select class="form-select" name="level_id" aria-label="Default select example" id="level_id">
                    <option selected disabled>اختار المستوى</option>
                    @foreach ($levels as $level)
                        <option value="{{$level->id}}" {{$course->level_id == $subject->id ? 'selected' : ''}}>{{$level->currentLevel}}</option>
                    @endforeach
                  </select>
            </div>

            <input type="submit" class="btn btn-primary" value="تعديل">

        </form>


    </div>
@endsection
