// jQuery(document).on('submit', '#form',function(event){
//     event.preventDefault();
//     $nombre = "namelgl";
//     $dni = "dnilg";
//     $usuario = "usuariolg";
//     $password = "passlg";

//     jQuery.ajax({
//         url:'http://localhost/Login/main/logear.php',
//         type:'POST',
//         dataType: 'json',
//         data: $(this).serialize(),
//         beforeSend: function(){
//             $('.btnlg').val('Validando...');
//         }
//     })
//     .done(function(respuesta){
//         console.log(respuesta);
//         if(!respuesta.error){
//             if(respuesta.tipo = $usuario , $password){
//                 location.href='http://localhost/Login/usuario/usuario.php';
//             } else{
//             //    nada xd
//             }
//         }else{
//             $('.error').slideDown('slow');
//             setTimeout(function(){
//                 $('.error').slideUp('slow');
//             },2000);
//             $('.btnlg').val('Iniciar Sesión');
//         }
//     })
//     .fail(function(resp){
//         console.log(resp.responseText);
//     })
//     .always(function(){
//         console.log("completado");
//     });

// });

// form.reset();
