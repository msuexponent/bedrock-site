$(document).ready(function(){
    // Make top level navigation clickable
    $('.nav .dropdown-toggle').click(function() { 
        var location = $(this).attr('href'); 
        window.location.href = location; 
        return false; 
    });
});

