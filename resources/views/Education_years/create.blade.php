@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> السنوات الدراسية :</h3>
        <h5>إضافة سنة دراسية جديد</h5>

        <form action="{{route('education_years.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم السنة الدراسية </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ادخل اسم السنة الدراسية">
            </div>

            <input type="submit" class="btn btn-primary" value="إضافة">

        </form>


    </div>
@endsection
