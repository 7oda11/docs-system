@extends('site.layout.main')
@section('page')
    <div class="card text-center">
        
        <div class="card-body">
            @auth
                <h4>تم تسجيل الدخول</h4>
                {{ auth()->user()->name }}
            @else
                <h4>الرجاء تسجيل الدخول <a href="{{ route('login_form') }}">هنا</a></h4>
            @endauth
        </div>
    </div>
    {{-- <div class="container">
        <div class="card">
            <div class="card-header">
                Home
            </div>
            <div class="card-body">
                @auth
                    <h4>تم تسجيل الدخول</h4>
                    {{ auth()->user()->name }}
                @else
                    <h4>الرجاء تسجيل الدخول <a href="{{ route('login_form') }}">هنا</a></h4>

                @endauth
            </div>
        </div>
    </div> --}}
@endsection
