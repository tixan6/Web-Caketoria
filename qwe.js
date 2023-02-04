(function () 
{    
    document.querySelector(".accept").addEventListener("click", function() 
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


    $(".removeAMessage").on("click", function() 
    {
        
        let msg = $(this).prop('id');
        var node = document.getElementById('usg' + msg);
        node.parentNode.removeChild(node);
        $.ajax({

            url: '../ajax/removeMessage.php',
            type: 'POST',
            cache: false,
            data: {'id': msg},
            dataType: 'html',
            beforeSend: function() 
            {
                $(".removeAMessage").prop("disabled", true);
            },
            success: function(data) {
                $(".removeAMessage").prop("disabled", false);
            }
        });
    });
})();