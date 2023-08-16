@extends('site.layout.main')
@section('page')
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">
                الصفحه الشخصيه
            </div>
            <div class="card-body">
                <div class="form create">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="title">عنوان المنشور</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="file">pdf ملف ال </label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="docs">وصف</label>
                                    <textarea name="docs" id="docs" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success d-block w-100">انشاء</button>
                    </form>
                </div>
                <div class="my-posts p-2 m-1 card ">
                    <div class="card-header">
                        <h4 class="col-12 text-right">منشوراتى</h4>

                    </div>
                    @foreach (auth()->user()->posts as $post)
                        <div class="row card p-2 m-2">
                            <div class="card-header text-center">
                                <p class="text-center fs-3">{{ $post->user->name }}</p>
                                <label for="">{{ $post->title }}</label>
                            </div>
                            <div class="card-body">
                                <p class="text-right">{{ $post->docs }}</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ $post->file }}" download
                                    class="btn btn-success text-decoration-none d-block mb-2">تحميل المستند</a>
                                <a href="{{ $post->file }}" target="_blank"
                                    class="btn btn-primary text-decoration-none d-block">عرض المستند</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
