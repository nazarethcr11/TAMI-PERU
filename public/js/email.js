$('#formContact').submit(function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    
    let firstNumber = parseInt ($('#telefono').val().substring(0, 1));
    
    if(firstNumber == 9){
        Swal.fire({
            icon: 'success',
            title: 'Enviando correo',
            text: ''
        });
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: data,
            success: function(res) {
                var res = JSON.parse(res);
                Swal.fire({
                    icon: res.type,
                    title: 'Gracias!',
                    text: res.msg
                });
                $("#formContact")[0].reset();
            }
        });

    }
    else{
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Telefono Incorrecto'
        });

    }
    console.log(firstNumber);
    
   
});
