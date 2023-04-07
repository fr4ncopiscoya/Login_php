jQuery(document).on('submit', '#form',function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'main/login.php',
        type:'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.btnlg').val('Validando...');
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'Admin'){
                location.href='main/admin/admin.php/';
            } else if(respuesta.tipo == 'Usuario'){
                location.href = 'main/usuario/usuario.php/';
            }
        }else{
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },2000);
            $('.btnlg').val('Iniciar Sesión');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("completado");
    });

});

// form.reset();
