(function () {


$(".send-message").on("click", () => 
{
    let msg = $(".text-comment").val();

    let phn = GetPhone();
    let phone = phn();
      $.ajax({
          url: '../ajax/comment.php',
          type: 'POST',
          cache: false,
          data: {'msg': msg, 'phone': phone,},
          dataType: 'html',
          beforeSend: function() 
          {
              $(".send-message").prop("disabled", true);
          },
          success: function(data) {
            alert(data);
            $(".send-message").prop("disabled", false);
          }
    })
})


$(".clearText").on("click", () => {$(".text-comment").val("");});



    

})();