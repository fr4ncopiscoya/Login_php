// jQuery(document).on('submit', '#form',function(event){
//     event.preventDefault();
//     $nombre = "namerg";
//     $dni = "dnirg";
//     $usuario = "usuariorg";
//     $password = "passrg";

//     jQuery.ajax({
//         url:'http://localhost/Login/main/insertar.php',
//         type:'POST',
//         dataType: 'json',
//         data: $(this).serialize(),
//         beforeSend: function(){
//             $('.btnrg').val('Registrando...');
//         }
//     })
//     .done(function(respuesta){
//         console.log(respuesta);
//         if(!respuesta.error){
//             if(respuesta.tipo =$nombre,$dni, $usuario , $password){
//                 location.href='http://localhost/Login/inicio/index.php';
//             } else{
//             //    nada xd
//             }
//         }else{
//             // $('.error').slideDown('slow');
//             // setTimeout(function(){
//             //     $('.error').slideUp('slow');
//             // },2000);
//             // $('.btnlg').val('Iniciar Sesión');
//         }
//     })
//     .fail(function(resp){
//         console.log(resp.responseText);
//     })
//     .always(function(){
//         console.log("completado");
//     });

// });















// function insertar(){
//     var datos=$('#form').serialize();

//     $.ajax({
//         url:'main/insertar.php',
//         type:'POST',
//         dataType: 'json',
//         data: datos,
//         beforeSend: function(e){
//             $('.btnrg').val('Registrando...');
//             if(e==1){
//                 alert("registro exitoso")
//             }else{
//                 alert("Error de registro")
//             }
//         }
//     });
// }

// $(document).ready(function(){
//     $('.btnrg').on('click',function(e){

//         e.preventDefault();
//         insertar();
//     });
// });




// $(document).ready(function(){
//     $('.doble').click(function(){
//         $('.doble').show();
//     })
// })


