@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> المراجع :</h3>
        <h5>إضافة مرجع جديد</h5>

        <form action="{{route('references.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="course_id" class="form-label"> المادة </label>
                <select class="form-select" name="course_id" aria-label="Default select example">
                    <option selected disabled>اختار المادة</option>
                    @foreach ($courses as $course )
                        <option value="{{$course->id}}">{{$course->subject->name .' - '. $course->teacher->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3">
                <label for="teacher_id" class="form-label"> نوع المرجعية </label>
                <select class="form-select" name="type_of_reference" aria-label="Default select example">
                    <option selected disabled>اختار نوع المرجعية</option>
                        <option value="نموذج">نموذج</option>
                        <option value="تلخيص">تلخيص</option>
                        <option value="مرجع">مرجع</option>
                  </select>
            </div>


            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="file_reference[]" id="formFile" multiple>
            </div>

            {{-- <div class="mb-3">
                <label for="level_id" class="form-label"> المستوى </label>
                <select class="form-select" name="level_id" aria-label="Default select example" id="level_id">
                    <option selected disabled>اختار المستوى</option>
                    @foreach ($levels as $level)
                        <option value="{{$level->id}}">{{$level->currentLevel}}</option>
                    @endforeach
                  </select>
            </div> --}}

            <input type="submit" class="btn btn-primary" value="إضافة">

        </form>


    </div>
@endsection
