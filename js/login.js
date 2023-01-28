(function() {
    // var result = document.getElementById("inNet");
    // if(result){
    //     var cookies = document.cookie.split(";");
    //     for(var i=0; i<cookies.length; i++){
        
    //         var parts = cookies[i].split("="),
    //             name = parts[0], 
    //             value = parts[1];
                
    //             var phone_number = value.match(/375\d+/);
    //             document.getElementById("inNet").innerHTML = "+" + phone_number;
    //             return phone_number;
    //     }
    // }

    var result = document.getElementById("inNet");
    if(result)
    {
        var results = document.cookie.match (/375\d+/);
        var results = "+" + results;
        result.innerHTML = results;
    }
})();





function GetPhone() 
{
    //closure - замыкание
    return function GetPhoneNumber() 
    {
        var result = document.getElementById("inNet");
        if(result)
        {
            var results = document.cookie.match (/375\d+/);
            var results = "+" + results;

            result.innerHTML = results;
            return results;
        }
        else { return "Номер телефона" }
    }
}
