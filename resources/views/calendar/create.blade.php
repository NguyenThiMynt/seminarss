@extends('admin.main')
@section('content')
    <div class="container">
        <div class="col-md-12 mb-2">
            <div class="row">
                <div class="col-md-4">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Today</a></li>
                        <li class="page-item"><a class="page-link" href="#">Back</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    2019年1月
                </div>
                <div class="col-md-2">
                    <button class="btn btn-light px-4 py-1">Agenda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
