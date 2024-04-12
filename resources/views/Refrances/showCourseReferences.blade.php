@extends('layouts.mainLayout')
@section('content')
    @push("style")
        <style>
            section.content{
                display: flex;
                justify-content: center;
            }
            #showFile{
                width: 95vw;
                height:975px;
            }
        </style>
    @endpush

    <p><a href="{{route('references.course-references',$reference_data['course_id'])}}">العودة إلى القائمة السابقة</a> </p>
    
    <section class="content">
        <iframe
           {{-- src="{{$file}}" --}}
           src="{{asset($reference_data['file_path'])}}"
           frameborder="0"
           id="showFile">
       </iframe>
    </section>



@endsection
