(function () 
{

    $(".Btnsubmit-admin").on("click", function() 
    {
        alert("Вы нажали");
        var log = document.querySelector(".login-panel").value;
        var pass = document.querySelector(".password-input").value;
    
        $.ajax({
            url: '../ajax/loginAdmin.php',
              type: 'POST',
              cache: false,
              data: {'log': log, 'pass': pass},
              dataType: 'html',
              beforeSend: function() 
              {
                  $(".More").prop("disabled", true);
              },
              success: function(data) {
                if(data != 1 ) 
                {
                    //alert("Неправильный логин или пароль");
                    document.querySelector(".centerError").style.visibility = "visible"
                }
                else {window.location = 'mainAdminPanel.php';}
                
                document.getElementById("a1").innerHTML = data;
                $(".More").prop("disabled", false);
              }
        });
    });
   

    


})();