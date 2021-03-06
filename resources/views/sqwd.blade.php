@extends('layout.home')
@section('content')
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('images/ban004.jpg');background-size: 100%;">
        <div class="tittle" >
            社区问答
        </div>
    </div>
    <!-- **********************banenr end************************ -->


    <!-- **********************内容 begin************************ -->
    @foreach($news as $new)
        @php
        $member = App\Member::find($new->member_id);
        @endphp
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
                       问题：{{$new->title}}
                    </a>
                </p>
                <p style="font-size: 15px; margin-top: -30px;margin-left: 80%">
                   {{date('Y-d-m h:m:s',$new->time)}}
                </p>
                <a class="commit_text" style="font-size: 18px!important;">
                    {!! $new->content !!}
                </a>
                <a href="{{url("newinfo/$new->id")}}" class="btn btn-primary" style="margin-left:80%; ">
                    查看详情
                </a>
            </div>
        </div>
    @endforeach


    <!-- *********************内容 end ************************ -->
@endsection