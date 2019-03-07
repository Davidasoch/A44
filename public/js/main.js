
$(document).ready(function(){
    $('#products').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom,
        single_column,breakpoint: 700
    }); 


//update item cart

$(".btn-update-item").on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var href = $(this).data('href');
    var quantity = $("#product_"+ id).val();
    window.location.href = href + "/" + quantity;

});

});



 