@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> الكليات :</h3>
        <h5> تعديل الكلية </h5>

        <form action="{{route('collages.update',$collage->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">اسم الكلية </label>
                <input type="text" name="name" class="form-control" id="name" value='{{$collage->name}}'>
                {{-- @error('name')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror --}}
            </div>

            <input type="submit" class="btn btn-primary" value="حفظ التغيير">

        </form>


    </div>
@endsection
