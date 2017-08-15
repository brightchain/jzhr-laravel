@extends('fund.project')
@section('text-content')
    <div class="uk-width-1-1 uk-margin-large-top  post-content">
        <div class="uk-article ">
            <h1 class="uk-article-title uk-text-center">{{$pasts->title}}</h1>
            <p class="uk-article-meta uk-text-center">
                <i class="uk-icon-clock-o"></i>&nbsp  {{date_format($pasts->updated_at,'Y-m-d')}}&nbsp &nbsp
                <i class="uk-icon-tags"></i>&nbsp {{$pasts->type}}&nbsp&nbsp
                <i class="uk-icon-pencil"></i>&nbsp chinajzhr
            </p>


            <hr class="uk-article-divider">
            <div class="text-indent">
                {!! $pasts->content !!}
            </div>

        </div>
    </div>
    @endsection