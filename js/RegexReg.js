(function () {
    document.querySelector(".Registration").addEventListener("click", function () {     
       preventDefault()
       Verification();  
    })

    function Verification() {
        var pass = document.querySelector(".password-input").value;
        var passRepeat = document.querySelector(".password-input-repeat").value;

        var email = document.querySelector(".email-Input").value;
        var phone = document.querySelector(".phone-input").value;
        const regPas = /^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$/
        const regEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
        
        if (pass == passRepeat) 
        {
            location = 'check.php';
        }
        else 
        {
            alert("Габелла");
        } 
        
    }

})();


