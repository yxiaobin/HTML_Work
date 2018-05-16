<!DOCTYPE html>
<html>
<head>
    <title>后台管理中心</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/vendor.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/flat-admin.css")}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue-sky.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/red.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/yellow.css")}}">

    <style type="text/css">
        th::after{
            content: "" !important;
        }
    </style>
    @yield("css")
</head>
<body>
<div class="app app-default">
    <?php
    $member = \App\Member::find(session('id'));
    ?>
    <aside class="app-sidebar" id="sidebar" style="height: auto">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">后台管理中心</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li id="1" onmouseover = "gitlight(this)">
                    <a href="{{route('manager')}}">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">首页</div>
                    </a>
                </li>
                <li id="2" onmouseover="gitlight(this)">
                    <a href="{{url('/')}}" target="_blank" >
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">查看网站</div>
                    </a>
                </li>
                <li id="3" class="dropdown" onmouseover="gitlight(this)">
                    <a href="{{route('banner')}}">
                        <div class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="title">轮播图管理</div>
                    </a>
                </li>
                <li id="5" class="dropdown" onmouseover="gitlight(this)">
                    <a href="{{route('adminmanager')}}">
                        <div class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="title">管理员设置</div>
                    </a>
                </li>
                <li id="4" class="dropdown" onmouseover="gitlight(this)">
                    <a href="">
                        <div class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="title">文章管理</div>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url("artical/1")}}">大城小事</a></li>
                                <li><a href="{{url("artical/2")}}">周边美食</a></li>
                                <li><a href="{{url("artical/3")}}">旅游风景</a></li>
                            </ul>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <ul class="menu">
                <li>
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </a>
                </li>
                <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
            </ul>
        </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
        </div>
    </script>

    <div class="app-container">

        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="{{asset('/assets/images/profile.png')}}">
                            </button>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse in">
                        <ul class="nav navbar-nav navbar-mobile">
                            <li>
                                <button type="button" class="sidebar-toggle">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </li>
                            <li class="logo">
                                <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                            </li>
                            <li>
                                <button type="button" class="navbar-toggle">
                                    <img class="profile-img" src="{{asset('/assets/images/profile.png')}}">
                                </button>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-left">
                            <li class="navbar-brand">
                                <img src="" width="200px">
                            </li>
                            <li class="navbar-title">后台管理系统</li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown profile">
                                <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                                    <img class="profile-img" src="{{url('getImage')}}/{{$member->image}}">
                                    <div class="title">Profile</div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="profile-info">
                                        <h4 class="username">管理员您好</h4>
                                    </div>
                                    <ul class="action">
                                        <li>
                                            <a href="{{route('logout')}}">
                                                退出
                                            </a>
                                        </li>
                                    </ul>
                    </div>
            </div>

        </nav>

        @yield("content")




        <footer class="app-footer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-copyright">
                        Copyright © 2016 Company Co,Ltd.
                    </div>
                </div>
            </div>
        </footer>


    </div>

</div>

<script type="text/javascript" src="{{asset("/assets/js/vendor.js")}}"></script>
<script type="text/javascript" src="{{asset("/assets/js/app.js")}}"></script>
<script type="text/javascript">
//    function gitlight(url) {
//        var kind = document.getElementsByClassName('sidebar-menu');
//        var kind2 = kind.getElementsByTagName('ul');
//        var kind3 = kind2.getElementsByTagName('li');
//        console.log(kind3[0]);
//        for (var i = kind3.length - 1; i >= 0; i--) {
//            kind[i].style.display = 'none';
//            // console.log(kind[i]);
//        }
//        for (var i = kind3.length - 1; i >= 0; i--) {
//            if (kind3[i] == url) {
//                console.log(kind3[i]);
//                kind3[i].style.class = 'active';
//                // console.log(kind[i]);
//                break;
//
//            }
//
//        }
//    }
</script>
</body>
</html>
