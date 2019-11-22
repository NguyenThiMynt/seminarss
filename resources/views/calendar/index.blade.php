@extends('admin.main')
@section('content')
    <div class="main-content">
        <div class="row px-5 mb-4 create-delete">
            <div class="col-md-12 my-3">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3 class="title-tb">Agenda</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="#" class="btn btn-sm btn-light pull-right">カレンダー</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <table class="table text-center">
                <tr class="bg-light tt-title">
                    <th>イベント名</th>
                    <th>カラー</th>
                    <th>カテゴリー</th>
                    <th>開催日時</th>
                    <th>主催者</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="align-middle">Women’s Vintage Peacoat</td>
                    <td class="align-middle"></td>
                    <td class="align-middle">FX</td>
                    <td class="align-middle">2019/11/12 22:20</td>
                    <td>管理者</td>
                </tr>
                <tr>
                    <td class="align-middle">Women’s Vintage Peacoat</td>
                    <td class="align-middle"></td>
                    <td class="align-middle">FX</td>
                    <td class="align-middle">2019/11/12 22:20</td>
                    <td class="align-middle">管理者</td>
                </tr>
                <tr>
                    <td class="align-middle">Women’s Vintage Peacoat</td>
                    <td class="align-middle"></td>
                    <td class="align-middle">FX</td>
                    <td class="align-middle">2019/11/12 22:20</td>
                    <td class="align-middle">管理者</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

