$(document).ready(function(){
    $(".is-link").click(function() {
        $("#editmodal").addClass("is-active");     
    
        $tr = $(this).closest('tr');
        var data = $tr.chindren('td').map(function() {
            return$(this).text();
        }).get();
        console.log(data);

        $('#id').val(data['id']);
        $('#nombre').val(data['nombre'])
        $('#correo').val(data['correo'])
    });
});