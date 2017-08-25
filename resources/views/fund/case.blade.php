@extends('fund.project')
@section('text-content')

            <ul style="margin-top:40px;">
                @foreach($pasts as $past)
                <li class="uk-grid uk-grid-collapse" style="margin-bottom: 40px;padding-bottom:15px;border-bottom: 1px solid #ccc;">
                    <div class="uk-width-1-4" >
                        <a href="{{route('past',$past->id)}}">
                            <img src="/upload/{{$past->thumbs}}" alt="{{$past->title}}">
                        </a>
                    </div>
                    <div class="uk-width-3-4" style="padding-left:20px;">
                        <a href="{{route('past',$past->id)}}">
                            <h2 style="color: #cc9966;">{{$past->title}}</h2>
                        </a>
                            <p>
                                {{str_limit(strip_tags($past->content),300)}}
                            </p>
                        <div><i class="uk-icon-clock-o">&nbsp; {{date_format($past->updated_at,'Y-m-d')}}</i>&nbsp; &nbsp;  <i class="uk-icon-tags">&nbsp; {{$past->type}}</i> </div>

                    </div>

                </li>
                @endforeach

            </ul>
            {!! $pasts->links() !!}


@endsection
