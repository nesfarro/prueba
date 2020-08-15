;
$( document ).ready(function() {
    
    $( "#state" ).change(function() {
        var state=$(this).val();
        $.ajax({
            // la URL para la petición
            url : 'ajax/cities.php',
            data : { id :state },
            type : 'GET',
            dataType : 'html',
            success : function(data) {
                $('#city').html(data);
            }
        });
    });


    $("#form1").submit(function(event){
        event.preventDefault();
        $.ajax({
                url:'ajax/submit_form.php',
                type:'GET',
                data:$(this).serialize(),
                success:function(result){
                    if(result)
                    {
                        $('#message-popup').html('Tu información ha sido recibida satisfactoriamente');
                    }
                    else
                    {   $('#message-popup').html('Tu información no pudo ser recibida satisfactoriamente');}
                    $("#miModal").modal("show");
                }
        });
    });
});