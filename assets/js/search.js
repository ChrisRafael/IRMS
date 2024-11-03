$(document).ready(function(){
    // Search functionality
    $("#MyModal").on("keyup", function(){
        var value = $(this).val().toLowerCase();
        $("#example tbody tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
