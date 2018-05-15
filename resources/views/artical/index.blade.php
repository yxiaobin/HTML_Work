@extends('layout.manage')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">教程列表</div>
                <div class="card-body">
                    <table class="datatable table">
                        <thead>
                        <th>标题</th>
                        <th>摘要</th>
                        <th>缩略图</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($articals as $help)
                            <tr>
                                <td>{{$help->title}}</td>
                                <td>{{str_limit( strip_tags($help->content), 15, '...')}}</td>
                                <td><img src="{{url('getImage')}}/{{$help->image}}" alt="" width="100" height="50"></td>
                                <td>
                                    <a href="{{url("wzxq/$help->id")}}" class="btn btn-success btn-xs" role="button">
                                        详情
                                    </a>

                                    <a href="{{url("reeditartical/$help->id")}}" class="btn btn-primary btn-xs" role="button">
                                        编辑
                                    </a>


                                    <a href="{{url("deleteartical/$help->id")}}" class="btn btn-warning btn-xs" role="button">
                                        删除
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('newartical')}}">
                        <input type="button" class="btn btn-primary" value="新建教程">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

