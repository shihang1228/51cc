$(function() {
    var $captchaImage = $("#captchaImage");
    $captchaImage.click(function() {
        $captchaImage.attr("src", $captchaImage.attr("src") + "@timestamp=" + (new Date()).valueOf());
    });
    $("#form_login").validate({
        rules: {
            mobile: {
                required: true
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 16
            },
            captcha: {
                required: true
            }
        },
        messages: {
            mobile: "账号不能为空",
            password: {
                required: "密码不能为空"
            },
            captcha: "验证码不能为空"
        },
        showErrors: function(errorMap, errorList) {
            if (errorList.length > 0) {
                $("#error").html(errorList[0].message).show();
                setTimeout(function() {
                    $("#error").html("");
                }, 3000);
                return false;
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: $("#form_login").attr("action"),
                data: $("#form_login").serialize(),
                type: "POST",
                dataType: "json",
                cache: false,
                beforeSend: function() {
                    $("#submit_login").prop("disabled", true).val("登录中...");
                },
                success: function(rs) {
                    // if (rs.status < 0) {
                    //     $("#error").html(rs.msg);
                    //     if (rs.data && rs.data >= 3 && $captchaImage.length < 1) {
                    //         location.reload();
                    //     }
                    //     $("#submit_login").prop("disabled", false).val("登录");
                    //     $captchaImage.attr("src", $captchaImage.attr("src") + "@timestamp=" + (new Date()).valueOf());
                    // } else if (rs.status < 10) {
                    //     var redirect = $("#redirect").val() ? unescape($("#redirect").val()) : '';
                    //     top.location.href = redirect ? redirect : '../member';
                    // } else {
                    //     top.location.href = "data/edit";
                    // }
                    var location_url = $(".location_url").val();
                    if(rs.result){
                        alert("恭喜你，登录成功");
                        window.location.href=location_url;
                    }else{
                        $("#submit_login").prop("disabled", false).val("登录");
                        $("#error").html(rs.msg);
                        return;
                    }
                }
            })
        }
    })
})