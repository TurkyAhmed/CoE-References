@extends('layouts.mainLayout')
@section('content')

    <div class="container">
        <h3 class="mt-5"> قائمة المراجع  :</h3>
        <a href="{{route('references.create')}}" class="btn btn-primary mb-5">إضافة مرجع  جديد</a>

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

            <div class='row'>
                @forelse ($references as $reference )
                   <div class='col-12 col-md-4 col-lg-3 mb-5'>
                        <div class="card " style="width: 18rem; height:23rem">

                        @if (pathinfo($reference->name, PATHINFO_EXTENSION) == 'pdf')
                            <img src="{{asset('assets/imgs/pdf_image.png')}}" class="card-img-top img-fluid"  style="width: 15rem; height:15rem" alt="...">
                        @elseif (pathinfo($reference->name, PATHINFO_EXTENSION) == 'docx')
                            <img src="{{asset('assets/imgs/word_image.jpeg')}}" class="card-img-top img-fluid"  style="width: 18rem; height:15rem" alt="...">
                        @else
                            <img src="{{asset('assets/reference_files/'.$reference->course->subject->name .'/'. $reference->type_of_reference .'/'. $reference->name )}}" class="card-img-top img-fluid"  style="width: 18rem; height:15rem"alt="...">
                        @endif

                            <div class="card-body pt-0">
                              <h5 class="card-title mt-3">{{$reference->name}}</h5>
                              <div class="mt-3">
                                  <a href="{{route('references.references-download', $reference->id)}}" class="btn btn-primary"><i class="fa-solid fa-download"></i>  </a>
                                  <a href="{{route('references.show', $reference->id)}}" class="btn btn-primary"><i class="fa-regular fa-face-rolling-eyes"></i></a>
                              </div>

                            </div>
                        </div>
                    </div>

                @empty
                    <p> لا توجد كورسات </p>
                @endforelse
            </div>

    </div>
@endsection
