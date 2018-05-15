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
<div class="content" style="height: 400px ">
  <div class="contentimg" style="background-image: url({{url('getImage')}}/{{$new->image}});">
  </div>
  <div class="contenttext ">
       <p class="content_text_title" style="">
        {{$new->title}}
       </p>
        <p class="content_text_p" >
       {!! $new->content !!}
        </p>
    </div>
   
</div>
<!-- *************************内容 end -->

@endsection