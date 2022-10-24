
$(document).ready(function () {
    $("#myModal").modal('show');
})
function Delete(id) {
    $('.modal').modal('show');
    console.log(id);

    $('#Confermed_delete_button').attr('onclick','Confermed_delete('+id+')')
}

function Confermed_delete(id) {
    $.ajax({
        url: '/getAJAX.php',
        method: 'post',
        dataType: 'html',
        data: {
            operation: 'delete',
            id: id
        },
        success: function(data){
            console.log(data);
            $("[data-row-id='"+id+"']").remove();
            $('.modal').modal('hide');

        }
    });

}