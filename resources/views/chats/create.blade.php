@extends('admin.main')
@section('content')
    <form action="#" method="post" enctype="multipart/form-data" class="f-form w-form ml-5">
        <div class="col-md-12 mb-2">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3 class="title-tb">お知らせ登録・変更</h3>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">タイトル</label>
            <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="comment">コンテンツ</label>
            <textarea class="form-control ckeditor" rows="5" cols="30" id="txtare_content"></textarea>
        </div>
        <div class="col-12 px-5 mt-4 text-center">
            <button type="button" class="btn btn-light px-3 py-2 mr-5 btn-cancel">キャンセル</button>
            <button type="button" class="btn btn-success px-3 py-2 ml-5 btn-create">保存</button>
        </div>
    </form>
@endsection
@push('js')
    <script>
        CKEDITOR.replace('txtare_content', {
            filebrowserBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
@endpush
