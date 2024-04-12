@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة الاقسام  :</h3>
        <a href="{{route('departments.create')}}" class="btn btn-primary">إضافة قسم  جديد</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم القسم  </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($departments as $department )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$department->name}}</td>
                        <td>
                            <a href="{{route('departments.show',$department->id)}}">تفاصيل</a>
                            <a href="{{route('departments.edit',$department->id)}}"> تعديل</a>
                            <a href="{{route('departments.destroy',$department->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> لا توجد اقسام دراسية </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
