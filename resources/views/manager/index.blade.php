@extends('layout.manage')
@section('content')
    <div class="row" style="margin: 10px -15px 30px -15px">
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("banner")}}">
                <div class="card-body">
                    <i class="icon fa fa-user-plus fa-4x"></i>
                    <div class="content">
                        <div class="title"> 轮播图管理</div>
                        <div class="value"><span class="sign"></span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="{{url("artical/1")}}">
                <div class="card-body">
                    <i class="icon fa fa-envelope-o fa-4x"></i>
                    <div class="content">
                        <div class="title"> 大城小事</div>
                        <div class="value"><span class="sign"></span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="{{url("artical/2")}}">
                <div class="card-body">
                    <i class="icon fa fa-envelope-o fa-4x"></i>
                    <div class="content">
                        <div class="title"> 周边美食</div>
                        <div class="value"><span class="sign"></span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("artical/3")}}">
                <div class="card-body">
                    <i class="icon fa fa-envelope-o fa-4x"></i>
                    <div class="content">
                        <div class="title"> 旅游风景</div>
                        <div class="value"><span class="sign"></span></div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    @endsection