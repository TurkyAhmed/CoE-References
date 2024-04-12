@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> الكليات :</h3>
        <h5>إضافة كلية جديد</h5>

        <form action="{{route('collages.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">اسم الكلية </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ادخل اسم الكلية">
            </div>

            <input type="submit" class="btn btn-primary" value="إضافة">

        </form>


    </div>
@endsection
