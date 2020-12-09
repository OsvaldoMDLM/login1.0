$("#AddModal").click(function() {
    $("#addmodal").addClass("is-active");  
    
}); 

$("#EditModal").click(function() {
    $("#editmodal").addClass("is-active");  
    
});

$(".close-modal").click(function() {
    $(".modal").removeClass("is-active");
});