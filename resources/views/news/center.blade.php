@extends('news.news')
@section('text-content')
    <div style="padding-top: 40px;"></div>
    {{--<div class="uk-width-1-1 uk-margin-large-bottom news-center">--}}
        {{--<div class="uk-grid uk-grid-small">--}}
            {{--<div class="uk-width-1-5"><a href=""><img src="/img/fund1.jpg"></a></div>--}}
            {{--<div class="uk-width-7-10 uk-margin-left">--}}
                {{--<div class="ntitle"><a href="">衡盛生物科技有限公司项目发布会</a></div>--}}
                {{--<div class="infos" style="height:48px; overflow:hidden">2016年12月17日，“衡盛生物科技有限公司项目发布会”在深圳福田中信证券大厦23楼召开。--}}
                    {{--此次发布会是金砖华荣今年继梅林项目后的第四个项目，</div>--}}
                {{--<div class="info-bar"><div class="uk-display-inline-block"><i class="uk-icon-clock-o"></i> 2017-07-28　<i class="uk-icon-eye"></i> 1012</div>--}}
                    {{--<div class="uk-align-right uk-display-inline-block"><a href="news-detail.php?id=263">点击全文</a>　</div></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="uk-width-1-1 uk-margin-large-bottom news-center">--}}
        {{--<div class="uk-grid uk-grid-small">--}}
            {{--<div class="uk-width-1-5"><a href=""><img src="/img/fund3.jpg"></a></div>--}}
            {{--<div class="uk-width-7-10 uk-margin-left">--}}
                {{--<div class="ntitle"><a href="">衡盛生物科技有限公司项目发布会</a></div>--}}
                {{--<div class="infos" style="height:48px; overflow:hidden">2016年12月17日，“衡盛生物科技有限公司项目发布会”在深圳福田中信证券大厦23楼召开。--}}
                    {{--此次发布会是金砖华荣今年继梅林项目后的第四个项目，</div>--}}
                {{--<div class="info-bar"><div class="uk-display-inline-block"><i class="uk-icon-clock-o"></i> 2017-07-28　<i class="uk-icon-eye"></i> 1012</div>--}}
                    {{--<div class="uk-align-right uk-display-inline-block"><a href="news-detail.php?id=263">点击全文</a>　</div></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="uk-width-1-1 uk-margin-large-bottom news-center">--}}
        {{--<div class="uk-grid uk-grid-small">--}}
            {{--<div class="uk-width-1-5"><a href=""><img src="/img/fund2.jpg"></a></div>--}}
            {{--<div class="uk-width-7-10 uk-margin-left">--}}
                {{--<div class="ntitle"><a href="">衡盛生物科技有限公司项目发布会</a></div>--}}
                {{--<div class="infos" style="height:48px; overflow:hidden">2016年12月17日，“衡盛生物科技有限公司项目发布会”在深圳福田中信证券大厦23楼召开。--}}
                    {{--此次发布会是金砖华荣今年继梅林项目后的第四个项目，</div>--}}
                {{--<div class="info-bar"><div class="uk-display-inline-block"><i class="uk-icon-clock-o"></i> 2017-07-28　<i class="uk-icon-eye"></i> 1012</div>--}}
                    {{--<div class="uk-align-right uk-display-inline-block"><a href="news-detail.php?id=263">点击全文</a>　</div></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@foreach($posts as $post)
    <div class="uk-width-1-1 uk-margin-large-bottom news-center">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-1-5"><a href=""><img src="/upload/{{$post->thumbs}}"></a></div>
            <div class="uk-width-7-10 uk-margin-left">
                <div class="ntitle"><a href="{{route('newShow',$post->id)}}">{{$post->title}}</a></div>
                <div class="infos" style="height:48px; overflow:hidden">{{str_limit(strip_tags($post->content),150)}}</div>
                <div class="info-bar"><div class="uk-display-inline-block"><i class="uk-icon-clock-o"></i> {{date_format($post->updated_at,'Y-m-d')}}　<i class="uk-icon-eye"></i> {{$post->clicks}}</div>
                    <div class="uk-align-right uk-display-inline-block"><a href="{{route('newShow',$post->id)}}">点击全文</a>　</div></div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="uk-clearfix"></div>
    {!! $posts->links() !!}
    @endsection