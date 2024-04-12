@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة الكليات :</h3>
        <a href="{{route('collages.create')}}" class="btn btn-primary">إضافة كلية جديدة</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"> اسم الكلية </th>
                  <th scope="col">  الاجراءات </th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;  @endphp
                @forelse ($collages as $collage )
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$collage->name}}</td>
                        <td>
                            <a href="{{route('collages.show',$collage->id)}}">تفاصيل</a>
                            <a href="{{route('collages.edit',$collage->id)}}"> تعديل</a>
                            <a href="{{route('collages.destroy',$collage->id)}}">حذف</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> لا توجد كليات </td>
                    </tr>
                @endforelse

        </table>
    </div>
@endsection
