@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> السنوات الدراسية :</h3>
        <h5> تعديل السنة الدراسية </h5>

        <form action="{{route('levels.update',$currentLevel->id)}}" method="POST">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="department_id" class="form-label"> القسم </label>
                <select class="form-select" name="department_id" aria-label="Default select example">
                    <option selected disabled>اختار القسم</option>
                    @foreach ($departments as $department )
                        <option value="{{$department->id}}" {{$department->id == $currentLevel->department_id ? 'selected':''}}>{{$department->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3">
                <label for="education_year_id" class="form-label"> السنة الدراسية </label>
                <select class="form-select" name="education_year_id" aria-label="Default select example">
                    <option selected disabled>اختار الكلية</option>
                    @foreach ($years as $year )
                        <option value="{{$year->id}}" {{$year->id == $currentLevel->education_year_id ? 'selected':''}}>{{$year->name}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3">
                <label for="currentLevel" class="form-label"> المستوى </label>
                <select class="form-select" name="currentLevel" aria-label="Default select example" id="currentLevel">
                    <option selected disabled>اختار المستوى</option>
                    @foreach ($_levels as $_level)
                        <option value="{{$_level}}" {{$_level == $currentLevel->currentLevel ? 'selected':''}}>{{$_level}}</option>
                    @endforeach
                  </select>
            </div>

            <input type="submit" class="btn btn-primary" value="حفظ التغيير">

        </form>


    </div>
@endsection
