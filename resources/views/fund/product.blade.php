@extends('fund.fund')
@section('text-content')

    <ul class="ul-fund">
        @foreach($funds as $fund)
        <li class="uk-clearfix uk-grid uk-grid-collapse">

            <div class="uk-width-3-5">
                <img src="/upload/{{$fund->thumbs}}" alt="" class="uk-align-medium-left" style="width: 150px;height:150px">
                <h3><a href="{{route('fundshow',$fund->id)}}">{{$fund->title}}</a></h3>
                <p>
                    {{$fund->description}}
                </p>
            </div>
            <div class="uk-width-1-5 uk-vertical-align uk-text-center ul-fund-dashed" >
                <div class="uk-vertical-align-middle">
                    <p>投资起点：{{$fund->origin}}</p>
                    <p>投资期限：{{$fund->deadline}}</p>
                    <p>投资方向：{{$fund->field}}</p>
                </div>
            </div>
            <div class="uk-width-1-5 uk-vertical-align uk-text-center">
                <div class="uk-vertical-align-middle">
                <p>预期收益</p>
                <h3>{{$fund->profit}}</h3>
                <div><a href="{{route('fundshow',$fund->id)}}">了解详情</a></div>
                </div>
            </div>

        </li>
@endforeach

    </ul>
    {{ $funds->links() }}
@stop