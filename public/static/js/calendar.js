$(document).ready(function() {
    $('#events').DataTable();
    $('li.menu-toggle').click(function(){
        $('header ul').toggleClass('show');
    });
} );