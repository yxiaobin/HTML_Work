@extends('layout.home')
@section('content')

    <!--*********************轮播图 Begin ***********************-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset("/images/004.jpg")}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="{{asset("/images/005.jpg")}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="{{asset("images/003.jpg")}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--*********************轮播图 End ***********************-->

    <div class="divide">
        <div class="dividetext">
            <p>大城小事</p>
        </div>
        <div class="dividelittletext">
            <p>掌握东营时事热点，了解事件最新发展趋势</p>
        </div>
    </div>
    <!--******************************石油之城介绍Begin ***********************-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/mls002.jpg')}}" alt="" style="height: 275px;">
                    <div class="caption">
                        <h3>第十一届黄河口马拉松</h3>
                        <p>十年东马，向东必赢...</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">查看详情
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/dcxs002.jpg')}}" alt="...">
                    <div class="caption">
                        <h3>房价再次增长增长</h3>
                        <p>四五月份以来，东营房价再次...</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">查看详情</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/dcxs003.jpg')}}" alt="...">
                    <div class="caption">
                        <h3>东营迎来四季最美之季</h3>
                        <p>四五月份是东营最...</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">查看详情</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*********************介绍End ***********************-->
    <div class="divide">
        <div class="dividetext">
            <p>周边美食</p>
        </div>
        <div class="dividelittletext">
            <p>有酒有肉，约个好友</p>
        </div>
    </div>
    <!--*********************石油之城介绍Begin ***********************-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ms001.jpg')}}" alt="">
                    <div class="caption">
                        <h3>黄河口大闸蟹</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ms002.jpg')}}" alt="...">
                    <div class="caption">
                        <h3>广饶肴驴肉</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ms004.jpg')}}" alt="..." style="height: 221px;width: 409px;">
                    <div class="caption">
                        <h3>黄河刀鱼</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*********************介绍End ***********************-->

    <!--*********************查看更多began ***********************-->
    <div class="readmore">
        <a href="{{route('zbms')}}" class="btn btn-success" role="button" style="width: 130px; height: 38px;">查看更多 </a>
    </div>
    <!--*********************查看更多end ***********************-->
    <div class="divide">
        <div class="dividetext">
            <p>旅游景点</p>
        </div>
        <div class="dividelittletext">
            <p>好景之地，好客之地</p>
        </div>
    </div>
    <!--*********************石油之城介绍Begin ***********************-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ly001.jpg')}}" alt="" >
                    <div class="caption">
                        <h3>红色刘集</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ly002.jpg')}}" alt="..." style="height: 259px;">
                    <div class="caption">
                        <h3>黄河口生态旅游区</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('/images/ly003.jpg')}}" alt="..." style="height: 259px;">
                    <div class="caption">
                        <h3>揽翠湖旅游度假区</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*********************查看更多began ***********************-->
    <div class="readmore">
        <a href="{{route('lyfj')}}" class="btn btn-success" role="button" style="width: 130px; height: 38px;">查看更多 </a>
    </div>
    <!--*********************查看更多end ***********************-->
@endsection