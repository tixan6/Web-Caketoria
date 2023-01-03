(function() {

    const fadeIn = (el, timeout, display) => {
        el.style.opacity = 0;
        el.style.display = display || 'block';
        el.style.transition = `opacity ${timeout}ms`;
        setTimeout(() => {
          el.style.opacity = 1;
        }, 10);
      };

      const fadeOut = (el, timeout) => {
        el.style.opacity = 1;
        el.style.transition = `opacity ${timeout}ms`;
        el.style.opacity = 0;
      
        setTimeout(() => {
          el.style.display = 'none';
        }, timeout);
      };


$(".btnOk").on("click", function() 
{
    var EFS = document.querySelector(".inputEmailForMailing").value;

    var re = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
    trn =  EFS.match(re);
    if (trn != null){
        $.ajax({
            url: '../ajax/forAnEmail.php',
            type: 'POST',
            cache: false,
            data: {'EFS': EFS},
            dataType: 'html',
            beforeSend: function() 
            {
                $(".MbtnOkore").prop("disabled", true);
            },
            success: function(data) {
                if (data == true) 
                {
                    var btnOn = document.querySelector(".popup-bg-Mailing");
                    fadeIn(btnOn, 600, 'flex');
                
                    setTimeout(closePopup, 3000)
        
                    function closePopup() 
                    {
                        var btnOff = document.querySelector(".popup-bg-Mailing");
                        fadeOut(btnOff, 600);
                    }
                
                    $(".btnOk").prop("disabled", false);
                }
                else 
                {
                    alert("Такая почта уже есть!!!");
                }
            }
        })
    }
    else {
        alert("Вводимая строка должна содержать знак \'@\' и точку резделителя домена.");
    }


    

});
    


})();
