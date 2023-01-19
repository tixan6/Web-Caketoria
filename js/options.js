(function() 
{
    var btnOn = document.querySelector(".popup-bg-info");
      fadeIn(btnOn, 600, 'flex');
      var phone = document.querySelector(".inNet").value;
    $.ajax({
        url: '../ajax/getInfoFromBd.php',
        type: 'POST',
        cache: false,
        data: {'phone': phone},
        dataType: 'html',
        beforeSend: function() 
        {
            $(".More").prop("disabled", true);
        },
        success: function(data) {
          document.getElementById("a1").innerHTML = data;
          $(".More").prop("disabled", false);
        }
    })
  })





})();