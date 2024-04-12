@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة المستويات  :</h3>
        <a href="{{route('levels.create')}}" class="btn btn-primary">إضافة مستوى  جديد</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم المستوى  </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($levels as $level )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$level->currentLevel}}</td>
                        <td>
                            <a href="{{route('levels.show',$level->id)}}">تفاصيل</a>
                            <a href="{{route('levels.edit',$level->id)}}"> تعديل</a>
                            <a href="{{route('levels.destroy',$level->id)}}">حذف</a>
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
