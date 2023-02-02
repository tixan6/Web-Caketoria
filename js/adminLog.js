(function () 
{

    $(".Btnsubmit-admin").on("click", function() 
    {
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
   

    $(".accept").on("click", function() 
    {
        let accept = $(this).prop('id');
        document.getElementById('productId' + accept).style.opacity = 0.5;
        document.getElementById('productId' + accept).style.background = "#b7ff9c";
    });
    
    $(".refuse").on("click", function() 
    {
        
        let accept = $(this).prop('id');
        var node = document.getElementById('productId' + accept);
        node.parentNode.removeChild(node);

        $.ajax({

            url: '../ajax/removeOrder.php',
            type: 'POST',
            cache: false,
            data: {'id': accept},
            dataType: 'html',
            beforeSend: function() 
            {
                $(".refuse").prop("disabled", true);
            },
            success: function(data) {
                $(".refuse").prop("disabled", false);
            }
        });
    });









    
})();