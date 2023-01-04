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
        dataType: 'html',
        beforeSend: function() 
        {
            $("#vacancy").prop("disabled", true);
        },
        success: function(data) {
        if (data != false) 
        {
            var articleDiv = document.querySelector("div.scrollItems");
            var elem = document.createElement("div");
            elem.classList.add("vacancyItems");
            articleDiv.appendChild(elem);

            
            data.forEach(element => {
                var elemText = document.createTextNode(element[0]);
                elem.appendChild(elemText);
            });
        }

        
        //document.getElementById("a1").innerHTML = data;


        $("#vacancy").prop("disabled", false);
        }
    });
});    

})();