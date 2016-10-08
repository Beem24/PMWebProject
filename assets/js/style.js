/**
 * Created by Kinglexy on 22/09/2016.
 */
$(document).ready(function () {
    function checkNetwork() {
        /*$.ajaxSetup({async:false});
        re="";
        r=Math.round(Math.random() * 10000);
        $.get("http://nacosslautech.org.ng/images/loader.gif",{subins:r},function (d) {
            re = true;
        }).error(function () {
            re = false;
        });
        return re;*/
        return true;
    }

    $(function () {
       $('.navbar-custom .navbar-collapse').on('show.bs.collapse',function (e) {
           $('.navbar-custom .navbar-collapse').not(this).collapse('hide');
       });
    });

    $("#login_form #sign_in_button").click(function (e) {
        e.preventDefault();
        var email = $("#inputEmail").val();
        var pass  = $("#inputPass").val();
        if (checkNetwork() == true){
            $.ajax({
                type: "POST",
                url: "library/modelController/api/LoginUserAPI.php?action=request_login",
                data: {email_address:email,password:pass},
                beforeSend:function () {
                    $("p.response-msg").text("loading.....").addClass("success").show();
                },
                success:function(res){
                    //console.log(res)
                    if(res == "true")
                        window.location = "library/modelController/api/LocationCheck.php?ref_mm=share_page";

                    else
                        $("p.response-msg").html(res).removeClass("success").addClass("error").show();
                }
            });

        }else {
            $("p.response-msg").text("!Oops, A network error occurred while sending your login request. Please try again. If this condition persists, please check your internet connection. ").addClass("error").show();
    }

    });

    /*$("#submitNew2").click(function(e) {
        e.preventDefault();
        var id = $("#user_post").val();

            $.ajax
            ({
                type: "POST",
                url: "count_vote.php",
                data: {user_post: id},
                cache: false,
                beforeSend: function () {
                    $(".modalDialog").addClass("m2");
                    $("#u").html("<img src='images/loader.gif'> Casting your vote, please wait....");
                },
                success: function (html) {
                    //$('tr#delNews'+id).fadeOut(2000, function() {$(this).remove();});
                    // $(".modalDialog").removeClass("m2");
                    $(".modalDialog").addClass("m2");
                    $("#u").html("<img src='images/loader.gif'> <span style='vertical-align: middle'> Casting your vote, please wait....</span>");
                    //aleng html);
                    //location.reload();
                }
            });
        }});*/

});