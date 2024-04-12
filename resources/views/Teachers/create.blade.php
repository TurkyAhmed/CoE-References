@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> المحاضرين :</h3>
        <h5>إضافة محاضر جديد</h5>

        <form action="{{route('teachers.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم المحاضر </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ادخل اسم المحاضر">
            </div>

            <input type="submit" class="btn btn-primary" value="إضافة">

        </form>


    </div>
@endsection
