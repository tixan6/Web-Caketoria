(function () {

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

    document.querySelector(".open-popup-Contacts").addEventListener("click", function () {
        var btnOn = document.querySelector(".popup-bg-contact");
        fadeIn(btnOn, 600, 'flex');
    });
    
    document.querySelector(".closePopup-Contact").addEventListener("click", function () {
        var btnOff = document.querySelector(".popup-bg-contact");
        fadeOut(btnOff, 600);
    });


    if (document.querySelector(".open-popup-reg")) 
    {
      document.querySelector(".open-popup-reg").addEventListener("click", function () {
        var btnOn = document.querySelector(".popup-bg-reg");
        fadeIn(btnOn, 600, 'flex');
      });
    } 
  
    document.querySelector(".closePopup-reg").addEventListener("click", function () {
        var btnOff = document.querySelector(".popup-bg-reg");
        fadeOut(btnOff, 600);
    });



    document.querySelector(".btnlog").addEventListener("click", function () {
      if (document.getElementById("BtnLogOrRegCheck") !== null) 
      {
        alert("Открыть настройки");
      }
      else {
        var btnOn = document.querySelector(".popup-bg-log");
        fadeIn(btnOn, 600, 'flex');
      };


      
    });
  
    document.querySelector(".closePopup-log").addEventListener("click", function () {
        var btnOff = document.querySelector(".popup-bg-log");
        fadeOut(btnOff, 600);
    });

    $(".More").on("click", function() {
      var btnOn = document.querySelector(".popup-bg-info");
      fadeIn(btnOn, 600, 'flex');
      var id = $(this).prop('id');
      $.ajax({
          url: '../ajax/getInfoFromBd.php',
          type: 'POST',
          cache: false,
          data: {'id': id},
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

    
    $(".closePopup-info").on("click", function() {
      var btnOff = document.querySelector(".popup-bg-info");
      fadeOut(btnOff, 600, 'flex');
    })


    var qwe = document.querySelectorAll(".btn_Cart");
    qwe.forEach(more => {
      more.addEventListener("click", function() {
        var element = document.getElementById('HaveOrNoHave');
        if(element)
        {
          var btnOn = document.querySelector(".popup-bg-plsReg");
          fadeIn(btnOn, 600, 'flex');
        } 
        else 
        {
          //Открытие Cart
          alert('я присутствую');


        }
      })
    });

    $(".closePopup-plsReg").on("click", function() {
      var btnOff = document.querySelector(".popup-bg-plsReg");
      fadeOut(btnOff, 600, 'flex');
    })

    


    $(".LogIn_message").on("click", function() {
      var btnOff = document.querySelector(".popup-bg-plsReg");
      fadeOut(btnOff, 600, 'flex');

      var btnOn = document.querySelector(".popup-bg-log");
      fadeIn(btnOn, 600, 'flex');
    })

    $(".Registration_message").on("click", function () {
      var btnOff = document.querySelector(".popup-bg-plsReg");
      fadeOut(btnOff, 600, 'flex');

      var btnOn = document.querySelector(".popup-bg-reg");
      fadeIn(btnOn, 600, 'flex');

    })





    $("#vacancy").on("click", function () 
    {
      var btnOn = document.querySelector(".popup-bg-vacancy");
      fadeIn(btnOn, 600, 'flex');
    });

    $(".closePopup-vacancy").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-vacancy");
      fadeOut(btnOff, 600, 'flex');
    });



    
    $(".vacancyItems").on("click", function () 
    {
      var btnOn = document.querySelector(".popup-bg-infoForVacancy");
      fadeIn(btnOn, 600, 'flex');
    });

    $(".closePopup-infoForVacancy").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-infoForVacancy");
      fadeOut(btnOff, 600, 'flex');
    });



    $("#btn-respond").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-respond-btn");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-respond-btn").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-respond-btn");
      fadeOut(btnOff, 600, 'flex');
    });



    $("#collaborate").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-collaborations");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-collaborations").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-collaborations");
      fadeOut(btnOff, 600, 'flex');
    });


    $(".loginForm").on("click", function() 
    {
      var phone = document.querySelector(".numberPhoneLog").value;
      var pass = document.querySelector(".passLog").value;
      $.ajax(
      {
        url: '../php/login.php',
        type: 'POST',
        cache: false,
        data: {'phone': phone, 'pass': pass},
        dataType: 'html',
        beforeSend: function() 
        {
            $(".loginForm").prop("disabled", true);
        },
        success: function(data) 
        {
          $(".loginForm").prop("disabled", false);
          if (data != 200) 
          {
            var log = new Promise((resolve, reject) => {
                resolve(setTimeout(window.location.reload.bind(window.location), 1500));
            });

              log.then((successMessage) => {
                logIn();
              });
          }
          else 
          {
            OutIn();
          }            
        }
      }
      );  
    });

    function logIn() 
    {
      $(".UARL").text("Вы вошли");
      $(".ANIM").attr("src","/img/Anim/Checkmark.png");
      var btnOn = document.querySelector(".popup-bg-animLogin");
      fadeIn(btnOn, 600, 'flex');
    }
    function OutIn() 
    {
      $(".UARL").text("Неправильный логин или пароль");
      $(".ANIM").attr("src","/img/Anim/Closemark.png");
      var btnOn = document.querySelector(".popup-bg-animLogin");
      fadeIn(btnOn, 600, 'flex');
      setTimeout(function() 
      {
        var btnOff = document.querySelector(".popup-bg-animLogin");
        fadeOut(btnOff, 600, 'flex');
      }, 3000);
    }


    $(".ExitFromAccount").on("click", function()
    {
      document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    });




    $(".options").on("click", function() 
    {
      var btnOn = document.querySelector(".popup-bg-options");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-options").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-options");
      fadeOut(btnOff, 600, 'flex');
    });



//Измена пароля
    $("#changePassBtn").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-changePass");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-changePass").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-changePass");
      fadeOut(btnOff, 600, 'flex');
    });


//Измена имени

    $("#changeNameBtn").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-changeName");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-changeName").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-changeName");
      fadeOut(btnOff, 600, 'flex');
    });



//Измена номера телефона
    $("#changePhoneBtn").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-changePhone");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-changePhone").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-changePhone");
      fadeOut(btnOff, 600, 'flex');
    });



//Измена почты
    $("#changeEmailBtn").on("click", function () {
      var btnOn = document.querySelector(".popup-bg-changeEmail");
      fadeIn(btnOn, 600, 'flex');
    });
    
    $(".closePopup-changeEmail").on("click", function () 
    {
      var btnOff = document.querySelector(".popup-bg-changeEmail");
      fadeOut(btnOff, 600, 'flex');
    });





})();


