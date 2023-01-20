(function() 
{
  
$(".options").on("click", function() 
{
   var phn = GetPhone();
   var phone = phn();
   phone = '+' + phone; 

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

    $.ajax({
        url: '../ajax/change.php',
        type: 'POST',
        cache: false,
        data: {'old_pass': old_pass, 'new_pass': new_pass},
        dataType: 'html',
        beforeSend: function() 
        {
            $("#change-password").prop("disabled", true);
        },
        success: function(data) {
            alert(data);

        $("#change-password").prop("disabled", false);
        }
    })
});







})  
();