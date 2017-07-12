
<!DOCTYPE html>
<html>
<head>
    <title>{{Admin::title()}}|{{$title}}</title>

@include('common.header')

    @section('content')
        @show

@include('common.footer')
    @show

    <div id="win-detail" class="uk-modal">
        <div class="uk-modal-dialog uk-border-rounded">
            <button class="uk-modal-close uk-close" type="button"></button>
            <div class="uk-width-medium-1-1 zw">
                <h1 id="win-title"></h1>
                <div id="win-text">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script></div>
</body>
</html>
