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
                                <li class=" menu-none"><a  href="{{route('stock')}}" title="业务范围" class="menu-text1 {{ Request::is('*stock*') ? 'current' : '' }}">股权投资</a></li>
                                <li class="menu-none"><a  href="{{route('real')}}" title="专业团队" class="menu-text1 {{ Request::is('*real*') ? 'current' : '' }} ">房地产投资</a></li>
                                <li class="menu-none"><a  href="{{route('placement')}}" title="专业团队" class="menu-text1 {{ Request::is('*placement*') ? 'current' : '' }} ">定向增发</a></li>
                                <li class="menu-none"><a  href="{{route('merger')}}" title="专业团队" class="menu-text1 {{ Request::is('*merger*') ? 'current' : '' }} ">并购（ M&A ）</a></li>
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
            @section('text-content')
            @show
        </div>

    </div>

@endsection
