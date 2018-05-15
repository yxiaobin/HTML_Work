@extends('layout.home')
@section('content')
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('{{asset('/images/ban003.jpg')}}');background-size: 100%;">
        <div class="tittle" >
            社区问答
        </div>
    </div>
    <!-- **********************banenr end************************ -->
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.config.js")}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.all.min.js")}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/lang/zh-cn/zh-cn.js")}}"></script>


    <!-- **********************内容 begin************************ -->
    @php
            $member = App\Member::find($new->member_id);
            @endphp
        <div class="commit_box">
            <div class="commit_left">
                <div class="commit_img" style="background-image: url('{{url("getImage/$member->image")}}')">
                </div>
                <div class="commit_name">
                    <p>{{$member->name}}</p>
                </div>
            </div>
            <div class="commit_right">
                <p class="commit_text">
                    问题： {!! $new->title !!}
                <hr>
                <p style="font-size: 15px; margin-top: -30px;margin-left: 80%">
                    {{date('Y-d-m h:m:s',$new->time)}}
                </p>
                <a class="commit_text" style="font-size: 18px!important;">
                    {!! $new->content !!}
                </a>
                </p>
            </div>
        </div>
    @foreach($commits as $commit)
        @php
            $member = App\Member::find($commit->member_id);
        @endphp
        <div class="commit_box">
            <div class="commit_left">
                <div class="commit_img" style="background-image: url('{{url("getImage/$member->image")}}');">
                </div>
                <div class="commit_name">
                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>{{$member->name}}</p>
                </div>
            </div>
            <div class="commit_right">
                <p class="commit_text">
                    {!! $commit->content !!}
                </p>
                <p style="font-size: 15px; margin-top: -30px;margin-left: 80%">
                    {{date('Y-d-m h:m:s',$new->time)}}
                </p>
            </div>
        </div>
    @endforeach

    <!-- *********************内容 end ************************ -->
    {{--pingrun--}}
    <div class="card-body" style="width: 80%; height: 300px;   margin-left:9%; margin-top: 45px;">
        <form action="{{url("postcommit/$new->id")}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <div id="editor" type="text/plain" style="height: 200px;width: 100%;margin: auto"></div>
            </div>
            <input type="hidden" value="" name="id">
            <input type="submit" class="btn btn-primary" value="发表评论" style="margin-top: 20px">
        </form>
    </div>
    <script type="text/javascript">

        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        //var ue = UE.getEditor('editor');
        var ue = UE.getEditor('editor',{toolbars: [['fullscreen',//全屏
            'source',//源代码
            'undo',//撤回一步
            'redo',//前进一步
            'bold',//粗体
            'italic',//斜体
            'underline',//下划线
            'fontborder',//字体边框
            'strikethrough',//删除线
            'subscript',//下标
            'superscript',//上标
            'forecolor', //字体颜色
            'fontfamily',//字体
            'fontsize',//字体大小
            'formatmatch',//格式刷
            'touppercase', //字母大写
            'tolowercase', //字母小写
            'link',//超链接
            'unlink',//取消超链接
            'searchreplace',//查询替换
            'selectall'],//全选

            ['indent',//首行缩进
                'justifyleft', //居左对齐
                'justifycenter', //居中对齐
                'justifyright', //居右对齐
                'justifyjustify', //两端对齐
                'blockquote',//引用
                'preview',//预览
                'horizontal',//分割线
                'insertcode',//代码语言
                'paragraph',//段落格式
                'simpleupload',//单个图片上传
                'insertimage',//多个图片上传
                'imagecenter', //居中
                'insertvideo',//视频上传
                'emotion',//表情
                'map',//地图
                'backcolor',//背景色
                'lineheight', //行间距
                'edittip ', //编辑提示
                'customstyle', //自定义标题
                'autotypeset',//自动排版

                'background', //背景
                'template', //模板
                'scrawl', //涂鸦
                'time', //时间
                'date', //日期
                'snapscreen',
                'attachment'
            ]]});
        ue.ready(function() {
            //设置编辑器的内容
            ue.execCommand("inserthtml",'请输入你想输入的内容') ;
        });
    </script>

@endsection