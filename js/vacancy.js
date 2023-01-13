(function () 
{
 



$(".vacancyItems").on("click", function() 
{
    var vacancy = $(this).text().trim();
    $.ajax(
    {
        url: '../ajax/vacancy.php',
        type: 'GET',
        cache: false,
        data: {'vacancy': vacancy},
        dataType:'html',
        beforeSend: function() 
        {
            $("#vacancy").prop("disabled", true);
        },

        success: function(data) {
            result = $.parseJSON(data);
            
            document.querySelector(".vacancy-vacancy").innerHTML = result[0];
            document.querySelector(".vacancy-post").innerHTML = result[1];
            document.querySelector(".scrollAbountVacancy").innerHTML = result[2];
        $("#vacancy").prop("disabled", false);
        }
    });
});    



})();