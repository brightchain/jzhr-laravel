@extends('about.about')

@section('text-content')
    <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom" >
        @foreach($teams as $teams)
        <div class="uk-clearfix"></div>

        <div class="uk-grid uk-margin team1 uk-margin-top" style="border-bottom: 1px solid #ccc;">
            <div class="uk-width-1-3">
                <div class="team-pic"><img class="team-img uk-border-circle" src="/upload/{{$teams->thumbs}}" style="width: 230px;height: 230px;"></div>
            </div>
            <div class="uk-width-2-3">
                <div class="inner">
                    <div class="team-h1 uk-margin-large-top">{{$teams->name}}<span>{{$teams->title}}</span></div>
                    <div class="team-text uk-margin-large-top">{{$teams->content}}</div>
                </div>
            </div>
        </div>
            @endforeach
    </div><!--end about-->

@stop
