$(document).ready(function(){
    $(".is-link").click(function() {
        $("#editmodal").addClass("is-active");     
    
        $tr = $(this).closest('tr');

        var data = $tr.chindren('td').map(function() {
            return$(this).text();
        }).get();
    });
});