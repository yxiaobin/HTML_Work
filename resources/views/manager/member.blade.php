@extends("layout.manage")

@section("css")

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-tab">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        @php if(session('tab')){
                            $tab = session('tab');
                        }
                        @endphp
                        <li role="tab1" class="@if($tab==1){{"active"}}@endif">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">查看管理员</a>
                        </li>
                        <li role="tab2" style="width:160px" class="@if($tab==2){{"active"}}@endif">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">添加管理员</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding tab-content">
                    <div role="tabpanel" class="tab-pane @if($tab==1){{"active"}}@endif" id="tab1" style="padding-top: 100px">
                        <table class="datatable table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>管理员姓名</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$admin->name}}</td>
                                    <td>
                                        <a href="{{url("deleteadmin/$admin->id")}}">
                                            <input type="button" class="btn btn-xs btn-danger" value="取消身份">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @if(count($admins)==0)
                                <tr>
                                   <td>
                                       注意：除你之外已经不存在其他管理员
                                   </td>
                                </tr>
                             @endif
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane @if($tab==2){{"active"}}@endif" id="tab2">
                        <div class="row">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-md-8 col-sm-12">
                                <div class="section">
                                    <div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i>请填写信息</div>
                                    <div class="section-body __indent">
                                        <form class="form form-horizontal" method="post" action="{{route('adminmanager')}}" enctype="multipart/form-data">
                                            <div class="section">
                                                <div class="section-body">
                                                    {{csrf_field()}}
                                                    {{--<div class="form-group">--}}
                                                    {{--<label class="col-md-3 control-label">选择图片<span class="size">(1920x640)</label>--}}
                                                    {{--<div class="col-md-9">--}}
                                                    {{--<input type="file" name="img" accept="image/gif,image/jpeg,image/png,image/webp" class="form-control" placeholder="简体">--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">添加管理员</label>
                                                        <div class="col-md-9">
                                                            <select name="adminid" id="" class="form-control">
                                                                <option value="0">选择你想添加管理员的姓名</option>
                                                                @foreach($members as $member)
                                                                    <option value="{{$member->id}}">{{$member->name}}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--<div class="form-group">
                                                        <label class="col-md-3 control-label">描述</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="描述" name="description">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">链接地址</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="链接地址" name="url">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">链接名称</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="链接名称" name="url_title">
                                                        </div>
                                                    </div>-->
                                                    <div class="form-footer">
                                                        <div class="form-group">
                                                            <div class="col-md-9 col-md-offset-3">
                                                                <input type="submit" class="btn btn-primary" value="添加">
                                                                <input type="button" class="btn btn-default" value="取消">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection