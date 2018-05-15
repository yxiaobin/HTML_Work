@extends('layout.home')
@section('content')
    <!-- **********************banner began********************** -->
    <div class="banner" style="background-image: url('{{asset('/images/ban003.jpg')}}');background-size: 100%;">
        <div class="tittle" >
            旅游风景
        </div>
    </div>
    <!-- **********************banenr end************************ -->


    <!-- **********************内容 begin************************ -->

    <div class="lyfj_content">
        <div class="lyfj_img" style="background-image: url('images/mj.jpg');">

        </div>
        <div class="lyfj_tab" >
            <ul class="tab_postion" id="tablist">
                @for($i=0;$i<$num;$i++)
                <li id="{{$i+1}}" onmouseover="tab_change_log(this) "> {{$lyfjs[$i]->title}} </li>
                @endfor

            </ul>
        </div>
        <div class="lyfj_text" id = contenttext>
            @for($i=0;$i<$num;$i++)
            <section id="{{$i+1}}{{$i+1}}"  >
                <div  class="lyfj_text_img" style="background-image: url({{url('getImage')}}/{{$lyfjs[$i]->image}});">
                </div>
                <div class="lyfj_text_text">
                    <p>
                        {!!$lyfjs[$i]->content!!}
                    </p>
                </div>
            </section>
                @endfor
        </div>
    </div>
    <!-- *********************内容 end ************************ -->

@endsection