@extends('layout.home')
@section('content')

    <!--*********************轮播图 Begin ***********************-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @for($i=0; $i<$num;$i++)
                @if($i==0)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                @else
                    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                @endif
                @endfor
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @for($i=0; $i<$num;$i++)
                @if($i==0)
            <div class="item active">
                <img src="{{url('getImage')}}/{{$banners[$i]->image}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
                @else
                    <div class="item">
                        <img src="{{url('getImage')}}/{{$banners[$i]->image}}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                @endif
            @endfor
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
            @foreach($dcxss as $dcxs)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{url('getImage')}}/{{$dcxs->image}}" alt="" class="img_size" >
                        <div class="caption">
                            <h3>{{$dcxs->title}}</h3>
                            <p>{{str_limit( strip_tags($dcxs->content), 100, '...')}}</p>
                            <p>
                                <a href="{{url('wzxq')}}/{{$dcxs->id}}" class="btn btn-primary" role="button">查看详情
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

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
            @foreach($zbmss as $zbms)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{url('getImage')}}/{{$zbms->image}}" alt="" class="img_size">
                    <div class="caption">
                        <h3>{{$zbms->title}}</h3>
                    </div>
                </div>
            </div>
           @endforeach
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
            @foreach($lyfjs as $lyfj)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{url('getImage')}}/{{$lyfj->image}}" alt="" class="img_size">
                        <div class="caption">
                            <h3>{{$lyfj->title}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!--*********************查看更多began ***********************-->
    <div class="readmore">
        <a href="{{route('lyfj')}}" class="btn btn-success" role="button" style="width: 130px; height: 38px;">查看更多 </a>
    </div>
    <!--*********************查看更多end ***********************-->
@endsection