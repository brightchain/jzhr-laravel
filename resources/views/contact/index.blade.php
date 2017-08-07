@extends('contact.contact')
@section('text-content')

    <div id="wrap" class="my-map">
        <div id="mapContainer" class="amap-container" style="position: relative; background: rgb(252, 249, 242); cursor: url(&quot;http://webapi.amap.com/theme/v1.3/openhand.cur&quot;), default;"><object style="display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; pointer-events: none; z-index: -1;" type="text/html" data="about:blank"></object><div class="amap-maps"><div class="amap-drags"><div class="amap-layers" style="transform: translateZ(0px);"><canvas class="amap-layer" width="800" height="450" style="position: absolute; z-index: 0; top: 0px; left: 0px; height: 450px; width: 800px;"></canvas><div class="amap-markers" style="position: absolute; z-index: 120; top: 225px; left: 400px;"><div class="amap-marker" style="top: -31px; left: -6px; z-index: 3; transform: rotate(0deg); transform-origin: 9px 31px 0px; display: block;"><div class="amap-marker-content" title="深圳金砖华荣资产管理有限公司" style="opacity: 1;"><div class="icon icon-cir icon-cir-red"></div></div></div></div><canvas class="amap-labels" draggable="false" style="position: absolute; z-index: 99; height: 450px; width: 800px; top: 0px; left: 0px;" width="800" height="450"></canvas></div><div class="amap-overlays"></div></div></div><div style="display: none;"></div><div class="amap-controls"><div class="amap-toolbar" style="left: 10px; top: 10px; visibility: visible;"><div class="amap-pancontrol" style="position: relative; display: block;"><div class="amap-pan-left"></div><div class="amap-pan-top"></div><div class="amap-pan-right"></div><div class="amap-pan-bottom"></div></div><div class="amap-locate" style="position: relative; left: 17px; display: block;"></div><div class="amap-zoomcontrol" style="position: relative; left: 14px;"><div class="amap-zoom-plus"></div><div class="amap-zoom-ruler" style="display: block;"><div class="amap-zoom-mask" style="height: 18px;"></div><div class="amap-zoom-cursor" style="top: 18px;"></div><div class="amap-zoom-labels" style="display: none;"><div class="amap-zoom-label-street"></div><div class="amap-zoom-label-city"></div><div class="amap-zoom-label-province"></div><div class="amap-zoom-label-country"></div></div></div><div class="amap-zoom-minus"></div></div></div><div class="amap-overviewcontrol" style="width: 120px; height: 120px; visibility: visible;"><div class="amap-overview-main" style="width: 115px; height: 115px;"><div class="amap-overview-map" style="width: 115px; height: 115px;"><img src="http://webrd01.is.autonavi.com/appmaptile?lang=zh_cn&amp;size=1&amp;scale=1&amp;style=7&amp;x=3345&amp;y=1784&amp;z=12" style="visibility: inherit; position: absolute; left: -138.987px; top: -123.471px;"></div><div class="amap-overview-win" style="width: 50px; height: 28px; left: 33px; top: 44px; display: block;"></div><div class="amap-overview-win" style="width: 50px; height: 28px; left: 33px; top: 44px; display: block;"></div></div><div class="amap-overview-button" style="background-position: -40px -386px;"></div></div><div class="amap-scalecontrol" style="left: 2px; bottom: 20px; visibility: visible;"><div class="amap-scale-text" style="width: 98.6515px;">200 米</div><div class="amap-scale-line"><div class="amap-scale-edgeleft"></div><div class="amap-scale-edgeright" style="left: 91.6515px;"></div><div class="amap-scale-middle" style="width: 90.6515px;"></div></div></div></div><a class="amap-logo"><img src="http://webapi.amap.com/theme/v1.3/autonavi.png"></a><div class="amap-copyright" style="display: none;"><!--v1.3.28--> © 2017 AutoNavi <span class="amap-mcode">- GS(2016)710号</span></div></div>
    </div>
    <script src="//webapi.amap.com/maps?v=1.3&amp;key=8325164e247e15eea68b59e89200988b"></script>
    <script>
        !function(){
            var infoWindow, map, level = 16,
                center = {lng: 114.061599, lat: 22.536351},
                features = [{type: "Marker", name: "深圳金砖华荣资产管理有限公司", desc: "地址：深圳市福田区大中华国际交易广场西区14楼<br />电话：0755-82986278        传真：0755-82986286", color: "red", icon: "cir", offset: {x: -9, y: -31}, lnglat: {lng: 114.061674, lat: 22.536351}}];

            function loadFeatures(){
                for(var feature, data, i = 0, len = features.length, j, jl, path; i < len; i++){
                    data = features[i];
                    switch(data.type){
                        case "Marker":
                            feature = new AMap.Marker({ map: map, position: new AMap.LngLat(data.lnglat.lng, data.lnglat.lat),
                                zIndex: 3, extData: data, offset: new AMap.Pixel(data.offset.x, data.offset.y), title: data.name,
                                content: '<div class="icon icon-' + data.icon + ' icon-'+ data.icon +'-' + data.color +'"></div>' });
                            break;
                        case "Polyline":
                            for(j = 0, jl = data.lnglat.length, path = []; j < jl; j++){
                                path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                            }
                            feature = new AMap.Polyline({ map: map, path: path, extData: data, zIndex: 2,
                                strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity });
                            break;
                        case "Polygon":
                            for(j = 0, jl = data.lnglat.length, path = []; j < jl; j++){
                                path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                            }
                            feature = new AMap.Polygon({ map: map, path: path, extData: data, zIndex: 1,
                                strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity,
                                fillColor: data.fillColor, fillOpacity: data.fillOpacity });
                            break;
                        default: feature = null;
                    }
                    if(feature){ AMap.event.addListener(feature, "click", mapFeatureClick); }
                }
            }

            function mapFeatureClick(e){
                if(!infoWindow){ infoWindow = new AMap.InfoWindow({autoMove: true}); }
                var extData = e.target.getExtData();
                infoWindow.setContent("<h5>" + extData.name + "</h5><div>" + extData.desc + "</div>");
                infoWindow.open(map, e.lnglat);
            }

            map = new AMap.Map("mapContainer", {center: new AMap.LngLat(center.lng, center.lat), level: level});

            loadFeatures();

            map.on('complete', function(){
                map.plugin(["AMap.ToolBar", "AMap.OverView", "AMap.Scale"], function(){
                    map.addControl(new AMap.ToolBar);
                    map.addControl(new AMap.OverView({isOpen: true}));
                    map.addControl(new AMap.Scale);
                });
            })

        }();
    </script>
    <div class="uk-grid uk-margin-large uk-container-center">
        <div class="uk-width-1-1">
            <h3>联系方式</h3>
            <p>
                <i class="uk-icon-phone"></i>&nbsp; 0755-82986278
            </p>
            <p>
                <i class="uk-icon-tty"></i>&nbsp; 0755-82986286
            </p>
            <p>
                <i class="uk-icon-envelope-o"></i>&nbsp; manager@chinajzhr.com
            </p>
            <p>
                <i class="uk-icon-map-marker"></i>&nbsp; 深圳市福田区中心3路大中华国际交易广场西区14楼
            </p>
        </div>

    </div>

    @endsection