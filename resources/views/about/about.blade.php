@extends('common.layouts')
@section('content')

<div class="about-banner" style="background-image: url(/img/about.jpg)">
    <div class="m-bg">
        <div class="uk-container uk-container-center uk-text-left">
            <div class="uk-grid">
                <div class="uk-width-1-4 uk-padding-remove">
                    <h1>关于我们<br>
                    about us</h1>
                </div>
                <div class="uk-width-3-4 uk-text-right">
                    <h3>正行笃实、运筹制胜、诚信善为</h3>
                    <h4>——共享财富盛宴，铸造人生价值</h4>
                </div>
            </div>
        </div>
    </div>

</div><!--end banner-->
<div class="menu-bar">
    <div class="uk-container uk-container-center uk-text-center">
        <div>
            <li class="{{ Request::is('*company*') ? 'uk-active' : '' }}"><a href="{{route('company')}}">关于金砖</a></li>
            <li class="{{ Request::is('*team*') ? 'uk-active' : '' }}"><a href="{{route('team')}}">专业团队</a></li>
            <li class="{{ Request::is('rik*') ? 'uk-active' : '' }}"><a href="team.php">合规风控</a></li>
            <li class="{{ Request::is('wenh*') ? 'uk-active' : '' }}"><a href="culture.php">企业文化</a></li>
        </div>
    </div>
</div><!--end menu-bar-->


@section('text-content')
    @show
@endsection
