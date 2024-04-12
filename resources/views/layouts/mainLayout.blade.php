<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('style')
    <title>Document</title>
</head>
<body>
    {{-- header --}}
    <div class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
            <div class="container-fluid d-flex justify-content-round">
                <a class="navbar-brand ms-5 d-flex align-items-center" href="#">
                    <img src="{{asset('assets/imgs/logo.png')}}" alt="" width="40" height="35" class="d-inline-block align-text-top ms-2">
                    CoE
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                  <a class="nav-link" href="{{route('collages.index')}}">الجامعة</a>
                  <a class="nav-link" href="{{route('departments.index')}}">الاقسام</a>
                  <a class="nav-link" href="{{route('teachers.index')}}">المحاضرين</a>
                  <a class="nav-link" href="{{route('education_years.index')}}">السنة الدراسية</a>
                  <a class="nav-link" href="{{route('levels.index')}}">المستويات الدراسية</a>
                  <a class="nav-link" href="{{route('subjects.index')}}">المواد </a>
                  <a class="nav-link" href="{{route('courses.index')}}">الكورس </a>
                  <a class="nav-link" href="{{route('references.index')}}">المراجع </a>
                </div>
              </div>
              <div class="navbar-nav ">
                <a class="nav-link active" aria-current="page" href="#">تسجيل الدخول</a>
              </div>
            </div>
          </nav>
    </div>

    <div class="main">
        @yield('content')
    </div>

    {{-- footer --}}
    <footer class="bg-gray">
        <div class="text-center pb-5 pt-4 ">
            جميع الحقوق محفوظه &copy;TR17
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @stack('script')
</body>
</html>
