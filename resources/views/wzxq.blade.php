@extends('layout.home')
@section('content')

<!-- **********************banner began********************** -->
<div class="banner" style="background-image: url('{{asset('/images/ban001.jpg')}}');background-size: 100%;">
  <div class="tittle" >
    文章详情
  </div>
</div>
<!-- **********************banenr end************************ -->
<!-- *********************内容 began ************************ -->
<div class="content" style="height: 400px">
  <div class="contentimg" style="background-image: url('{{asset('/images/mls001.jpg')}}');">   
  </div>
  <div class="contenttext ">
       <p class="content_text_title" style="">
        第十一届黄河口马拉松
       </p>
        <p class="content_text_p" >
         黄河口（东营）国际马拉松赛是由中国田径协会、山东省体育局、东营市人民政府主办，东营市体育局运营承办的国际马拉松赛事。通过品牌化运作，突破单纯的赛事组织，提升赛事的综合效应：以引领市民健康向上的生活方式，提高赛事普及力，以打造时尚潮流的路跑文化，提高赛事影响力，以形成创新活力的产业链，提高赛事带动力，提高城市形象。
        </p>
    </div>
   
</div>
<!-- *************************内容 end -->

@endsection