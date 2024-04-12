@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة المحاضرين :</h3>
        <a href="{{Route('teachers.create')}}" class="btn btn-primary">إضافة محاضر</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم المحاضر </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($teachers as $teacher )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$teacher->name}}</td>
                        <td>
                            <a href="{{route('teachers.show',$teacher->id)}}">تفاصيل</a>
                            <a href="{{route('teachers.edit',$teacher->id)}}"> تعديل</a>
                            <a href="{{route('teachers.destroy',$teacher->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center"> لا يوجد محاضرين </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
