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
                <li id="1" onmouseover="tab_change_log(this) "> 东营天鹅湖 </li>
                <li id="2" onmouseover="tab_change_log(this)"> 牛庄镇 </li>
                <li id="3" onmouseover="tab_change_log(this)"> 刘集 </li>
                <li id="4" onmouseover="tab_change_log(this)"> 关帝庙 </li>
                <li id="5" onmouseover="tab_change_log(this)"> 清风胡 </li>
            </ul>
        </div>
        <div class="lyfj_text" id = contenttext>
            <section id="11" >
                <div class="lyfj_text_img" style="background-image: url('{{asset('/images/mj001.jpg')}}');">
                </div>
                <div class="lyfj_text_text">
                    <p>东营天鹅湖位于东营市东营区东部广利河南岸滨海。万里黄河塑造了神奇的黄河三角洲，三角洲上有一个烟波浩渺的人工湖。每到冬天，湖面上一群群洁白的天鹅，或安详优雅地结伴嬉戏，或温情脉脉地交颈摩挲，或悠闲自得地以嘴梳理羽毛，或颈扎水中，翩翩跳起"水上芭蕾"。由此，这个人工湖得名"天鹅湖"。</p>
                </div>
            </section>
            <section id="22">
                <div class="lyfj_text_img" style="background-image: url('{{asset('/images/mj002.jpg')}}');" >
                </div>
                <div class="lyfj_text_text">
                    <p>牛庄镇是省级中心镇，位于东营中心城区南端，距离中心城15公里。牛庄镇历史文化底蕴丰厚，我国优秀地方戏曲之一——吕剧起源于牛庄镇，吕剧主要创始人时殿元即出生在牛庄镇时家村。在吕剧文化的带动下，以解家草编、曹家剪纸为代表的民俗文化也有了长足发展，特色文化产业得到进一步繁荣，为发展特色文化旅游创造了条件。</p>
                </div></section>
            <section id="33">
                <div class="lyfj_text_img" style="background-image: url('{{asset('/images/mj003.jpg')}}');" >
                </div>
                <div class="lyfj_text_text">
                    <p>中共刘集支部旧址位于大王镇刘集村，是1925年春中共刘集支部的诞生地。刘集支部是山东省农村最早的4个党支部之一。刘集支部旧址是广饶县党组织的发祥地。在山东省农村党建历史上有着极其重要的地位和作用。改造后的刘集支部旧址，保护与建设进一步加强，设施更加配套，功能更加完善。</p>
                </div>
            </section>
            <section id="44" style="display: block;">
                <div class="lyfj_text_img" style="background-image: url('{{asset('/images/mj004.jpg')}}');" >
                </div>
                <div class="lyfj_text_text">
                    <p>广饶关帝庙位于广饶县城西北隅，东营市历史博物馆院内。始建于南宋建炎二年(1128年) ，因而又称“南宋大殿”。1965年前，原址南北长约130米，东西宽76米，有春秋阁、三义堂、东西厢房和戏楼等明清建筑，现仅存大殿。该殿绿瓦朱甍，飞檐翘角，歇山顶式，全木结构。</p>
                </div>
            </section>
            <section id="55">
                <div class="lyfj_text_img" style="background-image: url('{{asset('/images/mj005.jpg')}}');" >
                </div>
                <div class="lyfj_text_text">
                    <p>清风湖公园是山东省最大的城市公园，是全国首个以展现黄河文化为主题的公园。拥有山东省最大的8000平方米市民健身广场、国内最高的音乐喷泉之一。坐落在东营市政府的中轴线上，与市政府的新世纪广场遥相呼应，共同组成东营市政府核心区的标志性区域。</p>
                </div>
            </section>

        </div>
    </div>
    <!-- *********************内容 end ************************ -->

@endsection