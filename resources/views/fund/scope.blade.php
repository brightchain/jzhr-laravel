@extends('common.layouts')
@section('content')

    <div class="about-banner" style="background-image: url(/img/bannerabout.jpg)">
        <div class="m-bg">
            <div class="uk-container uk-container-center uk-text-left">
                <div class="uk-grid">
                    <div class="uk-width-2-5 uk-padding-remove">
                        <h1>业务领域<br>
                            OUR BUSINESS</h1>
                    </div>
                    <div class="uk-width-3-5 uk-text-right">
                        <h3>正行笃实、运筹制胜、诚信善为</h3>
                        <h4>——共享财富盛宴，铸造人生价值</h4>
                    </div>
                </div>
            </div>
        </div>

    </div><!--end banner-->

    <div class="uk-container uk-container-center  uk-margin-large-bottom">
        <div class="sub_left" data-uk-sticky="{top:50}">
            <div class="sub_left_title" >
                <div  class="columnSpace" >
                    <div  class="FrontSpecifies_show01-d1_c1">
                        <p>
                            业务领域<span>OUR BUSINESS</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sub_left_type" >
                <div xmlns="" class="columnSpace" >
                    <div class="FrontComContent_list01-d1_c1">
                        <div class="menu-first">
                            <ul class="list2">
                                <li class=" menu-none"><a  href="{{route('scope')}}" title="业务范围" class="menu-text1 {{ Request::is('*scope*') ? 'current' : '' }}">业务范围</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub_body">
            <div class="sub_mbx">
                <p>
                    您现在的位置：{{$title}}
                </p>
            </div>
            {{--<h1>业务范围</h1>--}}
            {{--<div>--}}
            {{--<img src="/img/scope.jpg" /></div>--}}
            {{--<div class="uk-clearfix uk-margin-large-top">--}}
            {{--&nbsp;</div>--}}
            {{--<div class="yws uk-grid uk-margin-large-bottom uk-margin-remove">--}}
            {{--<div class="uk-width-1-1">--}}
            {{--<div class="yw-kk">--}}
            {{--<div class="pic">--}}
            {{--<img src="/img/business1.jpg" /></div>--}}
            {{--<div class="title">--}}
            {{--股权投资</div>--}}
            {{--<div class="info">--}}
            {{--选择具备持续稳定增长能力的企业进行中期投资，通过持有成长企业的股权、上市退出、股权转让等方式获取投资回报。--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="uk-width-1-1 uk-margin-large-top">--}}
            {{--<div class="yw-kk">--}}
            {{--<div class="pic">--}}
            {{--<img src="/img/business2.jpg" /></div>--}}
            {{--<div class="title">--}}
            {{--财富管理</div>--}}
            {{--<div class="info">--}}
            {{--选择具备持续稳定增长能力的企业进行中期投资，通过持有成长企业的股权、上市退出、股权转让等方式获取投资回报。</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="uk-width-1-1 uk-margin-large-top">--}}
            {{--<div class="yw-kk">--}}
            {{--<div class="pic">--}}
            {{--<img src="/img/business3.jpg" /></div>--}}
            {{--<div class="title">--}}
            {{--房地产投资</div>--}}
            {{--<div class="info">--}}
            {{--选择具备持续稳定增长能力的企业进行中期投资，通过持有成长企业的股权、上市退出、股权转让等方式获取投资回报。--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="uk-width-1-1 uk-margin-large-top">--}}
            {{--<div class="yw-kk">--}}
            {{--<div class="pic">--}}
            {{--<img src="/img/business4.jpg" /></div>--}}
            {{--<div class="title">--}}
            {{--置业租赁</div>--}}
            {{--<div class="info">--}}
            {{--选择具备持续稳定增长能力的企业进行中期投资，通过持有成长企业的股权、上市退出、股权转让等方式获取投资回报。--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {!! $scope->content !!}
            <div class="uk-clearfix uk-margin-large-top">
            &nbsp;</div>
        </div>

    </div>

@endsection
