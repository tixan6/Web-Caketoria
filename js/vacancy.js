(function () 
{
 



$(".vacancyItems").on("click", function() 
{
    var vacancy = $(this).text().trim();
    alert(vacancy);
    $.ajax(
    {
        url: '../ajax/vacancy.php',
        type: 'POST',
        cache: false,
        data: {'vacancy': vacancy},
        dataType: 'text',
        beforeSend: function() 
        {
            $("#vacancy").prop("disabled", true);
        },
        success: function(data) {
            alert(data);
        $("#vacancy").prop("disabled", false);
        }
    });
});    

})();