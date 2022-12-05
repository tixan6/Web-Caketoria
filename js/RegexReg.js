(function () {
   

    document.querySelector(".btn-reg").addEventListener("click", function () {
       

       Verification();

       
    })




    function Verification() {
        var pass = document.querySelector(".password-input").value;
        var passRepeat = document.querySelector(".password-input-repeat").value;

        var email = document.querySelector(".email-Input").value;
        var phone = document.querySelector(".phone-input").value;
        const regPas = /^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$/
        const regEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
        
        
        if (pass.length >= 7) 
        {
            if (pass == passRepeat) {
                if (regPas.test(phone)) {
                    if (regEmail.test(email)) {
                        location = 'check.php';
                    }
                    else{
                        alert("Почта введена не корректно")
                    }
                }
                else {
                    alert("Не правильно введен номер телефона");
                }
            }
            else {alert("Пароли не совпадают")}
        } 
        else { alert("Придумайте надежный пароль") }
    }

})();


