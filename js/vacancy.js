(function () 
{


$("#vacancy").on("click", function() 
{
    info = "true";
    $.ajax(
    {
        url: '../ajax/vacancy.php',
        type: 'POST',
        cache: false,
        data: {'info': info},
        dataType: 'text',
        beforeSend: function() 
        {
            $("#vacancy").prop("disabled", true);
        },
        success: function(data) {
        if (data != false) 
        {
            alert(data);
        
        
            
            var articleDiv = document.querySelector("div.scrollItems");
            var elem = document.createElement("div");
            var p = document.createElement('p');
            elem.appendChild(p);
            elem.classList.add("vacancyItems");    
            articleDiv.appendChild(elem);

            
                var elemText = document.createTextNode(data);
                p.appendChild(elemText);
            
            
        }

        
        //document.getElementById("a1").innerHTML = data;


        $("#vacancy").prop("disabled", false);
        }
    });
});    

})();