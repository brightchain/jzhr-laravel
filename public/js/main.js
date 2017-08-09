$(document).ready(function(){
	browserRedirect(); 	

$("#win-detail").on("change","#ichecked",function() {
	
	if( $("#ichecked").is(':checked') ){
		$("#reg-buts > button").removeAttr("disabled");		
		}
		else{
			$("#reg-buts > button").attr('disabled',"true");		
			}

});



	
if ($.cookie("isClose") != 'yes') {
	$("#top-member-status").html("");
	
}else{	

	if($.cookie("member_name")!=null){
		$("#top-member-status").html("欢迎您, <span class=\'myname\'>"+ $.cookie("member_name") +"</span> <a href=\'./inc/logout.php\'>退出</a>");
		}else{
	$("#top-member-status").html("欢迎您, <span class=\'myname\'>"+ $.cookie("member_sn") +"</span> <a href=\'./inc/logout.php\'>退出</a>");
		}
	}
	


$("#top-member-status").on("click",".myname",function() {
	
	window.location="member.php";

});	


$("#win-detail").on("click","#m_name_box",function() {
	
	$(".inner2").hide();
	$(".inner3").show();

});	

$("#win-detail").on("click","#rese_but",function() {


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
            url: './inc/reservation_save.php',
            type: 'POST',
            data: {
				pr_id:$("#pr_id").val(),
				r_name:$("#r_name").val(),
                mobile:$("#rmobile").val(),
                money:$("#money").val(),
                m_name:$("#m_name").val()
            },

            success: function(data, st) {
                if (data == 'ok') {
                    alert('预约成功');
					window.location="my_reservation.php";
                    
                }else{
					alert(data);
					}

            },
            error: function(data, st) {
                alert(data);

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
 



function browserRedirect() { 

var sUserAgent= navigator.userAgent.toLowerCase(); 

var bIsIpad= sUserAgent.match(/ipad/i) == "ipad"; 

var bIsIphoneOs= sUserAgent.match(/iphone os/i) == "iphone os"; 

var bIsMidp= sUserAgent.match(/midp/i) == "midp"; 

var bIsUc7= sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4"; 

var bIsUc= sUserAgent.match(/ucweb/i) == "ucweb"; 

var bIsAndroid= sUserAgent.match(/android/i) == "android"; 

var bIsCE= sUserAgent.match(/windows ce/i) == "windows ce"; 

var bIsWM= sUserAgent.match(/windows mobile/i) == "windows mobile"; 

if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) { 

window.location.href= 'http://www.chinajzhr.com/';

} else { 


} 

} 



function showinfos(title, id) {

    $("#win-title").html(title);
    $('#win-text').html('<i class="uk-icon-spinner uk-icon-spin"></i>');
    $.ajax({
        url: 'm-frm.php?id=' + id,
        type: "get",
        dataType: "html",
        success: function(data) {

            $('#win-text').html(data);
        },
        error: function() {
            alert('error');
        }

    });

    var modal = UIkit.modal("#win-detail", {
        target: '#win-detail',
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



function reservation(title, id) {
	
if (parseInt($.cookie("member_test"))<1) {
	alert('请先完成本公司《投资者风险识别和承受能力调查问卷》后进一步操作');
	window.location.href='my_test.php';
	return false;
}
	
	
	$("#win-detail > div").height(530);
	
	$("#win-detail > div > button").show();

    $("#win-title").html(title);
    $('#win-text').html('<i class="uk-icon-spinner uk-icon-spin"></i>');
    $.ajax({
        url: 'm-frm.php?id=4&pr_id=' + id,
        type: "get",
        dataType: "html",
        success: function(data) {

            $('#win-text').html(data);
        },
        error: function() {
            alert('error');
        }

    });

    var modal = UIkit.modal("#win-detail", {
        target: '#win-detail',
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