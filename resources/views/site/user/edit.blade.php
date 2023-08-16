@extends('site.layout.main')
@section('page')
    <div class="row justify-content-center">
        <div class="card ">
            <div class="card-header">
                تعديل بياناتى
            </div>
            <div class="card-body">
                <form action="{{ route('user.update',$user) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" value="{{ $user->name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">البريد</label>
                        <input type="email" value="{{ $user->email }}" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">كلمه السر</label>
                        <input type="password" value="same" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">الجوال</label>
                        <input type="text" value="{{ $user->phone }}"  name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">صوره شخصيه</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">تعديل</button>
                </form>
            </div>
        </div>
    </div>
@endsection
