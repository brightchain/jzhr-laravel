@extends('news.news')
@section('text-content')
    <div class="uk-width-1-1 uk-margin-large-top  post-content">
        <div class="uk-article ">
        <h1 class="uk-article-title uk-text-center">{{$posts->title}}</h1>
        <p class="uk-article-meta uk-text-center">
            <i class="uk-icon-clock-o"></i>&nbsp  {{date_format($posts->updated_at,'Y-m-d')}}&nbsp &nbsp
            <i class="uk-icon-eye"></i>&nbsp {{$posts->clicks}}&nbsp&nbsp
            <i class="uk-icon-pencil"></i>&nbsp chinajzhr
        </p>
        <p class="uk-article-lead text-indent">{{str_limit(strip_tags($posts->content),150)}}</p>

        <hr class="uk-article-divider">
           <div class="text-indent">
               {!! $posts->content !!}
           </div>

        </div>
    </div>


@endsection