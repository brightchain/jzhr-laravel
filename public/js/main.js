$(document).ready(function(){


    // $("#my-id").on("change","#ichecked",function() {
    //
    //     if( $("#ichecked").is(':checked') ){
    //         $.cookie('isClose', 'yes', { expires: 365 });
    //     }
    //
    //
    // });







    $("#my-id").on("click","#m_name_box",function() {

        $(".inner2").hide();
        $(".inner3").show();

    });

    $("#my-id").on("click","#rese_but",function() {


        if ($("#r_name").val() == "") {
            alert("姓名不能为空！");
            $("#r_name").focus();
            return false;
        }

        if ($("#rmobile").val() == "") {
            alert("手机号码不能为空！");
            $("#rmobile").focus();
            return false;
        }

        if (!$("#rmobile").val().match(/^1[3|4|5|7|8]\d{9}$/)) {
            alert("手机号码格式不正确！");
            $("#rmobile").focus();
            return false;
        }

        if ($("#money").val() == "") {
            alert("金额不能为空！");
            $("#money").focus();
            return false;
        }




        $.ajax({
            url: './invest',
            type: 'POST',
            data: {
                pr_id:$("#pr_id").val(),
                r_name:$("#r_name").val(),
                mobile:$("#rmobile").val(),
                money:$("#money").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data) {
                if (data == 'ok') {
                    alert('预约成功');
                    window.location="/";

                }else{
                    alert(data);
                }

            },
            error: function(data) {
                alert(data+'1');

            }
        });

        return false;

    });







});//$(document).ready


$(window).resize(function(){



});//$(window).resize


window.onload = function () {

};


function GetQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return  unescape(r[2]); return null;
}




function showinfos() {

    //  $("#win-title").html(title);
    // $('#win-text').html('<i class="uk-icon-spinner uk-icon-spin"></i>');
    // $.ajax({
    //     url: 'm-frm.php?id=' + id,
    //     type: "get",
    //     dataType: "html",
    //     success: function(data) {
    //
    //         $('#win-text').html(data);
    //     },
    //     error: function() {
    //         alert('error');
    //     }
    //
    // });


    var modal = UIkit.modal("#my-id", {
        target: '#my-id',
        center: true,
        bgclose: false
    });
    if (modal.isActive()) {
        modal.hide();
    } else {
        modal.show();
    }
    $(".inner2").hide();
    return false;
}



function reservation(title, id) {
    $(".inner").hide();
    $(".inner2").show();
    $("#win-detail > div").height(530);

    $("#win-detail > div > button").show();

    $("#win-title").html(title);
    $("#pr_id").val(title);
    $('#win-text').html('<i class="uk-icon-spinner uk-icon-spin"></i>');
    $.ajax({
        url: './invest',
        type: "get",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function(data) {

            $("#msg").html(data.msg);
        },
        error: function() {
            alert('error');
        }

    });

    var modal = UIkit.modal("#my-id", {
        target: '#my-id',
        center: true,
        bgclose: false
    });
    if (modal.isActive()) {
        modal.hide();
    } else {
        modal.show();
    }

    return false;
}





function select_m(m_name){

    $("#m_name").val(m_name)
    $(".inner3").hide();
    $(".inner2").show();
}

//点击确认离开
function CloseWin() //这个不会提示是否关闭浏览器
{
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Firefox") != -1 || userAgent.indexOf("Chrome") !=-1) {
        window.location.href="about:blank";
    } else {
        window.opener = null;
        window.open("", "_self");
        window.close();
    }
}

//关闭弹出框
function CloseOpen()
{
    if( $("#ichecked").is(':checked') ){
        $.cookie('isClose', 'yes', { expires: 365 });
    }
    var modal = UIkit.modal("#my-id", {
    target: '#my-id',
        center: true,
        bgclose: false
});
    modal.hide();
}