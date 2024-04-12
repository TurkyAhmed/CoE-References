@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> الاقسام :</h3>
        <h5>إضافة قسم جديد</h5>

        <form action="{{route('departments.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label"> الكلية </label>
                <select class="form-select" name="collage_id" aria-label="Default select example">
                    <option selected disabled>اختار الكلية</option>
                    @foreach ($collages as $collage )
                        <option value="{{$collage->id}}">{{$collage->name}}</option>
                    @endforeach

                  </select>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">اسم القسم </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ادخل اسم القسم">
            </div>

            <input type="submit" class="btn btn-primary" value="إضافة">

        </form>


    </div>
@endsection
