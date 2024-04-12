@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> السنوات الدراسية :</h3>
        <h5> تعديل السنة الدراسية </h5>

        <form action="{{route('education_years.update',$year->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">اسم السنة الدراسية </label>
                <input type="text" name="name" class="form-control" id="name" value='{{$year->name}}'>
                {{-- @error('name')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror --}}
            </div>

            <input type="submit" class="btn btn-primary" value="حفظ التغيير">

        </form>


    </div>
@endsection
