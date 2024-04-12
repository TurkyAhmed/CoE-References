@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة الكورسات  :</h3>
        <a href="{{('courses.create')}}" class="btn btn-primary">إضافة كورس  جديد</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم الكورس  </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($courses as $course )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$course->subject->name .' - '. $course->teacher->name}}</td>
                        <td>
                            <a href="{{route('courses.show',$course->id)}}">تفاصيل</a>
                            <a href="{{route('courses.edit',$course->id)}}"> تعديل</a>
                            <a href="{{route('courses.destroy',$course->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> لا توجد كورسات </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
