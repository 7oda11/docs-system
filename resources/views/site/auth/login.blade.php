@extends('site.layout.main')
@section('page')
    <div class="row justify-content-center ">
        <div class="card ">
            <div class="card-header">
                تسجيل جديد
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">البريد</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">كلمه السر</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">دخول</button>
                </form>
            </div>
        </div>
    </div>
@endsection
