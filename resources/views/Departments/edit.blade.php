@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> السنوات الدراسية :</h3>
        <h5> تعديل السنة الدراسية </h5>

        <form action="{{route('departments.update',$department->id)}}" method="POST">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="name" class="form-label"> الكلية </label>
                <select class="form-select" name="collage_id" aria-label="Default select example">
                    @foreach ($collages as $collage )
                        <option value="{{$collage->id}}" {{$collage->id == $department->collage_id ? 'selected' : ''}}>{{$collage->name}}</option>
                    @endforeach

                  </select>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">اسم القسم </label>
                <input type="text" name="name" class="form-control" id="name" value="{{$department->name}}" placeholder="ادخل اسم القسم">
            </div>

            <input type="submit" class="btn btn-primary" value="حفظ التغيير">

        </form>


    </div>
@endsection
