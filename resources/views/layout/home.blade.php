<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>你好，东营</title>
    <link rel="icon" href="{{asset('/images/001.jpg')}}" mce_href="D:/BaiduNetdiskDownload/doc/images/logo.ico" type="image/x-icon">
    <!-- **********************************************引用 css 开始*******************************  -->
    <!-- 引用框架Bootstrap css -->
    <link href="{{asset("/css/bootstrap/css/bootstrap.css")}}" rel="stylesheet">
    <!-- 引用自己写的css -->
    <!-- 导航栏css样式-->
    <link href="{{asset("/css/navigation_bar.css")}}" rel="stylesheet">

    <link href="{{asset("/css/dcxs.css")}}" rel="stylesheet">
    <link href="{{asset("/css/zbms.css")}}" rel="stylesheet">
    <link href="{{asset("/css/lyfj.css")}}" rel="stylesheet">
    <link href="{{asset("/css/tlq.css")}}" rel="stylesheet">
    <!-- **********************************************引用 css 结束*******************************  -->
</head>

<body>

<!--*********************导航栏 Begin******************** -->
<nav class="navbar navbar-default " id="top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- 引用logo-->
            <a class="navbar-brand" href="{{route('index')}}">
                <i style="font-size: 25px">Dong &nbspYing</i>

            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="{{route('index')}}">首页 </a></li>
                <li ><a href="{{route('dcxs')}}">大城小事</a></li>
                <li ><a href="{{route('zbms')}}">周边美食</a></li>
                <li ><a href="{{route('lyfj')}}">旅游风景</a></li>
                <li ><a href="{{route('sqwd')}}">讨论区</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(session('status')==0)
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户入口 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="#login">登录</a></li>
                        <li><a data-toggle="modal" href="#register">注册</a></li>
                    </ul>
                        @endif
                        @if(session('status')==1)
                            @php
                                $id = session('id');
                                // dd($id);
                                $member = App\Member::find($id);
                                //dd($member);
                            @endphp
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$member->name}},你好！ <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a  data-toggle="modal" href="#idcard">修改个人信息</a></li>
                                <li><a  href="{{url('post')}}/{{$member->id}}">发表帖子</a></li>
                                <li><a  href="{{url('newlist')}}/{{$member->id}}">我的帖子</a></li>
                                @if($member->rank>0)
                                    <li><a href="{{url('manager')}}">后台管理</a></li>
                                @endif
                                <li><a  href="{{route('logout')}}">退出</a></li>
                            </ul>
                        @endif
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!--*********************导航栏 End ***********************-->

<!--*********************返回顶部 Began ***********************-->
<div class="up" id="toup">
    <a href="#top"  class="img-circle " >
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
</div>
<!--*********************返回顶部 End***********************-->
@yield('content');


<!-- ********************模态框begin *******************************-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">登录</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="post" style="text-align: center">
                    {{csrf_field()}}
                    <p>账号：<input type="text" name="user_name"  ></p>
                    <p>密码：<input type="password" name="password"></p>
                    <p><input type="submit" value="提交" class="btn btn-success">
                        <input type="button" class="btn btn-default" value="关闭" data-dismiss="modal"></p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 注册模态框 -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">注册</h4>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('register')}}" method="post" style="text-align: center">
                    {{csrf_field()}}
                    <p>账号：<input type="text" name="user_name" placeholder="账号"></p>
                    <p>密码：<input type="password" name="password" placeholder="密码"></p>
                    <p>密码：<input type="password" name="password_confirmation" placeholder="请再次确认你的密码"></p>
                    <p>姓名：<input type="text" name="name" placeholder="请输入你的用户名" ></p>
                    <p>邮箱：<input type="text" name="email"  placeholder="请输入你的邮箱"></p>
                    <p>性别：<input type="radio" name="sex" value="1" >男
                        <input type="radio" name="sex"  value="0">女
                    </p>
                    <p><input type="submit" value="提交" class="btn btn-success">
                        <input type="button" class="btn btn-default" value="关闭" data-dismiss="modal"></p>
                </form>
            </div>
        </div>
    </div>
</div>
{{--信息修改--}}
@if(session('status')==1 )
<div class="modal fade" id="idcard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">信息修改</h4>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url("information/$member->id")}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <p>姓名：<input type="text" name="name" placeholder="请输入你的用户名" ></p>
                    <p>密码：<input type="password" name="password" placeholder="密码"></p>
                    <p>邮箱：<input type="text" name="email"  placeholder="请输入你的邮箱"></p>
                    <p>性别：<input type="radio" name="sex" value="1" >男
                        <input type="radio" name="sex"  value="0">女
                    </p>
                    <p>头像：<input type="file" name="image" ></p>
                    <p><input type="submit" value="提交" class="btn btn-success">
                        <input type="button" class="btn btn-default" value="关闭" data-dismiss="modal"></p>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
<!-- ********************模态框end *******************************-->

<div class="webfoot">
    <p>备案号为:13854681546 &nbsp@Copy Right By YXB</p>

</div>


<!-- **********************************************引用 js 与 jquery 开始*******************************  -->
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="{{asset("/js/jquery.min.js")}}"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="{{asset("/css/bootstrap/js/bootstrap.js")}}"></script>
<script src="{{asset("/js/tab.js")}}"></script>
<!-- **********************************************引用 js 与 jquery 结束*******************************  -->
</body>
</html>