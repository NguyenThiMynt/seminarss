@extends('admin.main')
@section('content')
    <div class="main-content">
        <div class="col-md-12 my-3">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3 class="title-tb">ブログ一覧</h3>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-sm btn-danger pull-left px-4 py-2">一括削除</button>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('blog/create')}}" class="btn btn-sm btn-success pull-right mr-0 px-4 py-2">会員登録</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table text-center">
                        <tr class="bg-light tt-title">
                            <th>
                                <input type="checkbox" id="customCheck1">
                            </th>
                            <th>タイトル</th>
                            <th>コンテンツ</th>
                            <th>登録日</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input type="checkbox">
                            </td>
                            <td class="align-middle">タイトルタイトルタイトルタイ</td>
                            <td class="align-middle">コンテンツコンテンツコンテンツ</td>
                            <td class="align-middle">2019/11/12 22:20</td>
                            <td style="width: 12%">
                                <a href="#" class="btn btn-info px-4 py-1">変更</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input type="checkbox">
                            </td>
                            <td class="align-middle">タイトルタイトルタイトルタイ</td>
                            <td class="align-middle">コンテンツコンテンツコンテンツ</td>
                            <td class="align-middle">2019/11/12 22:20</td>
                            <td class="align-middle">
                                <a href="#" class="btn btn-info px-4 py-1">変更</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input type="checkbox">
                            </td>
                            <td class="align-middle">タイトルタイトルタイトルタイ</td>
                            <td class="align-middle">コンテンツコンテンツコンテンツ</td>
                            <td class="align-middle">2019/11/12 22:20</td>
                            <td class="align-middle">
                                <a href="#" class="btn btn-info px-4 py-1">変更</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


