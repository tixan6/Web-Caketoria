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



    document.querySelector(".open-popup-reg").addEventListener("click", function () {
      var btnOn = document.querySelector(".popup-bg-reg");
      fadeIn(btnOn, 600, 'flex');
    });
  
    document.querySelector(".closePopup-reg").addEventListener("click", function () {
        var btnOff = document.querySelector(".popup-bg-reg");
        fadeOut(btnOff, 600);
    });



    document.querySelector(".btnlog").addEventListener("click", function () {
      var btnOn = document.querySelector(".popup-bg-log");
      fadeIn(btnOn, 600, 'flex');
    });
  
    document.querySelector(".closePopup-log").addEventListener("click", function () {
        var btnOff = document.querySelector(".popup-bg-log");
        fadeOut(btnOff, 600);
    });
    

})();