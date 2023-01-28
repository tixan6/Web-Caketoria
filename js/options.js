(function() 
{
    var phn = GetPhone();
    var phone = phn();
     

    
$(".options").on("click", function() 
{
    $.ajax({
        url: '../ajax/options.php',
        type: 'POST',
        cache: false,
        data: {'phone': phone},
        dataType: 'html',
        beforeSend: function() 
        {
            $(".options").prop("disabled", true);
        },
        success: function(data) {
            result = $.parseJSON(data);
            document.querySelector(".nameText").innerHTML = result[0] + " " + result[1];
            document.querySelector(".NumPhone").innerHTML = result[3];
            document.querySelector(".Email-set").innerHTML = result[2];

            $(".options").prop("disabled", false);
        }
    })
});



$("#change-password").on("click", function() 
{
    var old_pass = document.getElementById("old-password").value;
    var new_pass = document.getElementById("new-password").value;

    if(old_pass.length != 0 && old_pass.new_pass != 0) 
    {
        $.ajax({
            url: '../ajax/change.php',
            type: 'POST',
            cache: false,
            data: {'old_pass': old_pass, 'new_pass': new_pass, 'phone1': phone},
            dataType: 'html',
            beforeSend: function() 
            {
                $("#change-password").prop("disabled", true);
            },
            success: function(data) {
                if(data > 0) 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Вы успешно изменили пароль";
                    $(".ANIM").attr("src","/img/Anim/Checkmark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                    }, 2000);
                }
                else 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Пароль неверный";
                    $(".ANIM").attr("src","/img/Anim/Closemark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                    }, 2000);
                }

            $("#change-password").prop("disabled", false);
            }
        })
    }
    else 
    {
        $(".popup-bg-checkChange").fadeIn(500);
        document.querySelector(".UARL-change").innerHTML = "Заполните все поля";
        $(".ANIM").attr("src","/img/Anim/Closemark.png");
        
        setTimeout(function() {
            $(".popup-bg-checkChange").fadeOut(500);
        }, 2000);
    }
    
});



$("#change-fio").on("click", function() 
{

    var name = document.getElementById("change-name").value;
    var surname = document.getElementById("change-surname").value;

    if(name.length != 0 && surname.length != 0) 
    {
        $.ajax({
            url: '../ajax/change-name.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'surname': surname, 'phone2': phone},
            dataType: 'html',
            beforeSend: function() 
            {
                $("#change-fio").prop("disabled", true);
            },
            success: function(data) {
                if(data > 0) 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Вы успешно изменили имя";
                    $(".ANIM").attr("src","/img/Anim/Checkmark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                    }, 2000);
                }
                else 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Повторите попытку позже";
                    $(".ANIM").attr("src","/img/Anim/Closemark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                    }, 2000);
                }

            $("#change-fio").prop("disabled", false);
            }
        })
    }
    else 
    {
        $(".popup-bg-checkChange").fadeIn(500);
        document.querySelector(".UARL-change").innerHTML = "Поля не должны быть пустые";
        $(".ANIM").attr("src","/img/Anim/Closemark.png");
        
        setTimeout(function() {
            $(".popup-bg-checkChange").fadeOut(500);
        }, 2000);
    }
    
});



$("#change-phone").on("click", function() 
{

    var PhoneNumber = document.getElementById("change-number").value;
    let resultPattern = PhoneNumber.match(/^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$/);
    if(resultPattern != null) 
    {
        $.ajax({
            url: '../ajax/changePhone.php',
            type: 'POST',
            cache: false,
            data: {'PhoneNumber': PhoneNumber, 'phone2': phone},
            dataType: 'html',
            beforeSend: function() 
            {
                $("#change-phone").prop("disabled", true);
            },
            success: function(data) {
                if(data > 0) 
                {
                    document.querySelector(".popup-checkChange").style.height = 250 + "px";
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Вы успешно изменили номер. Перезайдите в аккаунт";
                    $(".ANIM").attr("src","/img/Anim/Checkmark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                        document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        location.reload()
                    }, 2000);

                }
                else 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Повторите попытку позже";
                    $(".ANIM").attr("src","/img/Anim/Closemark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);     
                    }, 2000);
                    
                }

            $("#change-phone").prop("disabled", false);
            }
        })
    }
    else 
    {
        $(".popup-bg-checkChange").fadeIn(500);
        document.querySelector(".UARL-change").innerHTML = "Номер введен некорректно";
        $(".ANIM").attr("src","/img/Anim/Closemark.png");
        
        setTimeout(function() {
            $(".popup-bg-checkChange").fadeOut(500);
        }, 2000);
    }
    
});

$("#change-emailBtn").on("click", function() 
{

    var emailAddr = document.getElementById("change-email").value;
    let resultPattern = emailAddr.match(/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/);
    if(resultPattern != null) 
    {
        $.ajax({
            url: '../ajax/changeEmail.php',
            type: 'POST',
            cache: false,
            data: {'emailAddr': emailAddr, 'phone3': phone},
            dataType: 'html',
            beforeSend: function() 
            {
                $("#change-email").prop("disabled", true);
            },
            success: function(data) {
                if(data > 0) 
                {
                    //document.querySelector(".popup-checkChange").style.height = 250 + "px";
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Вы успешно изменили адресс почты";
                    $(".ANIM").attr("src","/img/Anim/Checkmark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);
                    }, 2000);

                }
                else 
                {
                    $(".popup-bg-checkChange").fadeIn(500);
                    document.querySelector(".UARL-change").innerHTML = "Повторите попытку позже";
                    $(".ANIM").attr("src","/img/Anim/Closemark.png");
                    
                    setTimeout(function() {
                        $(".popup-bg-checkChange").fadeOut(500);     
                    }, 2000);
                    
                }

            $("#change-email").prop("disabled", false);
            }
        })
    }
    else 
    {
        $(".popup-bg-checkChange").fadeIn(500);
        document.querySelector(".UARL-change").innerHTML = "Адресс введен некорректно";
        $(".ANIM").attr("src","/img/Anim/Closemark.png");
        
        setTimeout(function() {
            $(".popup-bg-checkChange").fadeOut(500);
        }, 2000);
    }
    
});




})  
();