@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة المواد :</h3>
        <a href="{{route('subjects.create')}}" class="btn btn-primary">إضافة مادة جديدة</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم المادة </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($subjects as $subject )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$subject->name}}</td>
                        <td>
                            <a href="{{route('subjects.show',$subject->id)}}">تفاصيل</a>
                            <a href="{{route('subjects.edit',$subject->id)}}"> تعديل</a>
                            <a href="{{route('subjects.destroy',$subject->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> لا توجد مواد </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
