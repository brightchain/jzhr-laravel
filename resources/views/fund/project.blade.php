@extends('common.layouts')
@section('content')

    <div class="about-banner" style="background-image: url(/img/bannerabout.jpg)">
        <div class="m-bg">
            <div class="uk-container uk-container-center uk-text-left">
                <div class="uk-grid">
                    <div class="uk-width-2-5 uk-padding-remove">
                        <h1>项目案例<br>
                            PROJECT CASE</h1>
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
                            项目案例<span>PROJECT CASE</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sub_left_type" >
                <div xmlns="" class="columnSpace" >
                    <div class="FrontComContent_list01-d1_c1">
                        <div class="menu-first">
                            <ul class="list2">
                                <li class=" menu-none"><a  href="{{route('case')}}" title="项目案例" class="menu-text1 {{ Request::is('*case*') ? 'current' : '' }}">项目案例</a></li>
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
                    您现在的位置：{{isset($title1)?$title1:$title}}
                </p>
            </div>
            @section('text-content')
                @show
        </div>

    </div>

@endsection
