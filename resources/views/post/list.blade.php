@extends('layout.home')
@section('content')
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('{{asset('/images/ban003.jpg')}}');background-size: 100%;">
        <div class="tittle" >
            社区问答
        </div>
    </div>
    <!-- **********************banenr end************************ -->


    <!-- **********************内容 begin************************ -->
    @foreach($news as $new)
    <div class="commit_box">
        <div class="commit_left">
            <div class="commit_img" style="background-image: url('{{url("getImage/$member->image")}}');">
            </div>
            <div class="commit_name">
                <p>{{$member->name}}</p>
            </div>
        </div>
        <div class="commit_right">
            <p class="commit_text">
                <a href="{{url("newinfo/$new->id")}}">
                    {!! $new->title !!}
                </a>
            <p style="font-size: 15px; margin-top: -30px;margin-left: 80%">
                2018/05/08
            </p>
            <p style="font-size: 15px; margin-top: 25px ;margin-left: 4%">
                {!! $new->content !!}
            </p>
            </p>
            <a href="{{url("newinfo/$new->id")}}" class="btn btn-warning" style="margin-left:80%; margin-top: 90px;">
                查看详情
            </a>
        </div>
    </div>
    @endforeach
    <!-- *********************内容 end ************************ -->
@endsection