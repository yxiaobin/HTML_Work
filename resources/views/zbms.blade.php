@extends('layout.home')
@section('content')
<!-- **********************banner began********************** -->
<div class="banner" style="background-image: url('images/ban001.jpg');background-size: 100%;">
    <div class="tittle" >
        周边美食
    </div>
</div>
<!-- **********************banenr end************************ -->
<!-- *********************内容 began ************************ -->
<div class="content" >
      @foreach($zbmss as $zbms)
        <div class="contentimg dis" style="background-image:  url({{url('getImage')}}/{{$zbms->image}});;">
        </div>
        <div class="contenttext dis">
            <p class="content_text_title" style="">{{$zbms->title}}</p>
            <p class="content_text_p" >
              {!! $zbms->content !!}
            </p>
        </div>
    @endforeach
          {{$zbmss->links()}}
</div>

<!-- *************************内容 end -->
@endsection