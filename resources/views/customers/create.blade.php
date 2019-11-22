@extends('admin.main')
@section('content')
    <form action="#" method="post" enctype="multipart/form-data" class="f-form ml-5">
        <div class="col-md-12 mb-2">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3 class="title-tb">一ユーザー登録・変更</h3>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">性</label>
            <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">名</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> 管理者として登録
            </label>
        </div>
        <div class="col-12 px-5">
            <button type="button" class="btn btn-light px-3 py-2 mr-5 btn-cancel">キャンセル</button>
            <button type="button" class="btn btn-success px-3 py-2 ml-4 btn-create">保存</button>
        </div>
    </form>
@endsection
