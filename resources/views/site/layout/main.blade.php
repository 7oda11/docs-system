<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('BSS/css/bootstrap.min.css') }}">
    <title>Doc System</title>
</head>

<body>

    <div class="container p-2">
        <div class="container m-1">
            <div class="row">

                <div class="col-9 text-right" dir="rtl" >
                    <div class="row w-100">
                        @if ($errors->any())
                            <div class="alert alert-danger ">
                                <ul>
                                    @foreach ($errors->all() as $error )
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert w-100 alert-success">
                                <h4 class=" col-12 text-center">{{ session()->get('success') }}</h4>
                            </div>
                        @endif
                    </div>
                    @yield('page')
                </div>
                <div class="col-3 text-center">
                    <div class="card">
                        <div class="card-body">
                            @auth
                                <div class="col-12 text-center">
                                    <img width="50%" style="border-radius: 50%" src="{{ asset(auth()->user()->image) }}"
                                        alt="">
                                </div>
                                <div class="col-12">
                                    <h4>{{ auth()->user()->name }}</h4>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('profile') }}" class="btn btn-block d-block btn-primary mb-2">الصفحه الشخصيه</a>
                                    <a href="{{ route('user.edit',auth()->user()) }}" class="btn btn-block d-block btn-info mb-2">تعديل بياناتى</a>

                                    <a href="{{ route('logout') }}" class="btn btn-block d-block btn-danger">تسجيل
                                        الخروج</a>

                                </div>
                            @else
                                <div class="col-12">
                                    <a href="{{ route('login_form') }}" class="btn btn-block d-block btn-primary mb-2">تسحيل
                                        دخول</a>
                                    <a href="{{ route('register_form') }}" class="btn btn-block d-block btn-success">تسجيل
                                    </a>

                                </div>
                            @endauth
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    @yield('js')
    <script src="{{ asset('BSS/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
