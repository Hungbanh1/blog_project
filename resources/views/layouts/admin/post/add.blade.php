@extends('layouts.admin.admin')
@section('content')
    <script src="https://cdn.tiny.cloud/1/91qwausszucgq5ob75ezk0f4vnl5yrehpsuf67451rdvk90k/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
    </script>
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm bài viết
            </div>
            <div class="card-body">
                <form action="{{ route('post_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">Danh mục bài viết :</label>
                        <select class="form-control mr-1" name="category" id="category">
                            {{-- <option>{{ $bcName }}</option> --}}
                            @foreach ($list_cat_post as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="author">Tác giả</label>
                        <select class="form-control mr-1" name="author" id="author">
                            {{-- <option>{{ $bcName }}</option> --}}
                            @foreach ($list_author_by_user_id as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('author')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title_head">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title_head" id="title_head">
                        @error('title_head')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumb_head">Ảnh bài viết 1</label><br>
                        <input type="file" name="thumb_head" id="thumb_head">
                        @error('thumb_head')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="desc">Mô tả bài viết</label>
                        <input class="form-control" type="text" name="desc" id="desc">
                        @error('desc')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                </form>
            </div>
        </div>
    </div>
@endsection
