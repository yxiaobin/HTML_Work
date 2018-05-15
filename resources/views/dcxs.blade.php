@extends("layout.home")
@section("content")
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('{{asset('/images/ban002.jpg')}}');background-size: 100%;">
        <div class="tittle">
            大城小事
        </div>
    </div>
    <!-- **********************banenr end************************ -->

    <!--*********************天气预报 Began***********************-->
    <div class="tqyb">
        <iframe width="420" scrolling="no" height="100" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&py=dongying&num=5&site=12">
        </iframe>

    </div>
    <!--*********************天气预报 End***********************-->

    <!--********************** 列表  Began*****************************-->
    @foreach($dcxss as $dcxs)
        <div class="jiange">
            <div class="list">
                <div class="listimg" style="background-image: url({{url('getImage')}}/{{$dcxs->image}}); background-size: cover;">
                    <div class="listtext">
                        <p>{!! $dcxs->content !!}</p>
                            <p>
                                <a href="{{url("wzxq/$dcxs->id")}}" class="btn btn-primary" role="button">查看详情
                                </a>
                            </p>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--********************** 列表  End*****************************-->

@endsection