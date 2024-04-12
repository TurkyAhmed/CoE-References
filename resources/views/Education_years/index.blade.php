@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة السنوات الدراسية :</h3>
        <a href="{{route('education_years.create')}}" class="btn btn-primary">إضافة سنة دراسية  جديدة</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم السنة الدراسية </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($years as $year )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$year->name}}</td>
                        <td>
                            <a href="{{route('education_years.show',$year->id)}}">تفاصيل</a>
                            <a href="{{route('education_years.edit',$year->id)}}"> تعديل</a>
                            <a href="{{route('education_years.destroy',$year->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> لا توجد سنوات دراسية </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
