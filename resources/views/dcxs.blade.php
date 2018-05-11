@extends("layout.home")
@section("content")
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('images/ban002.jpg');background-size: 100%;">
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
    <div class="jiange">
        <div class="list">
            <div class="listimg" style="background-image: url('images/mls002.jpg'); background-size: 460px 270px;">
                <div class="listtext">
                    <p>十年东马，向东必赢</p>
                    <p style="font-size: 9px; padding-top: 15px;">阅读量：1501</p>
                    <div class="listbutton">
                        <a href="#" class="btn btn-primary" role="button">查看详情
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jiange">
        <div class="list">
            <div class="listimg" style="background-image: url('images/dcxs002.jpg');background-size: 460px 270px;">
                <div class="listtext">
                    <p>东营时房价持续走高</p>
                    <p style="font-size: 9px; padding-top: 15px;">阅读量：1105</p>
                    <div class="listbutton">
                        <a href="#" class="btn btn-primary" role="button">查看详情
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jiange">
        <div class="list">
            <div class="listimg" style="background-image: url('images/dcxs003.jpg'); background-size: 460px 270px;">
                <div class="listtext">
                    <p>东营迎来四季最美时刻</p>
                    <p style="font-size: 9px; padding-top: 15px;">阅读量：1005</p>
                    <div class="listbutton">
                        <a href="#" class="btn btn-primary" role="button">查看详情
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--********************** 列表  End*****************************-->

@endsection