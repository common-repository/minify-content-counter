jQuery(document).ready(function($) {
    var input = $('#content'),
        count = $('#minify_counter').text(input.val().length);
    
    input.bind('keydown', function() {
        setTimeout(function() {
           count.text(input.val().length);
        },4);
    });
});