// console.log("HOLA");
// $('.btnlg').click(function(){
//     $('.btnlg')
//     usuariolg= $('usuariolg').val();
//     passlg= $('passlg').val();
    
//     $.ajax({

//         url:'http://localhost/Login/main/logear.php',
//         type:'POST',
//         data:{usuario:usuariolg,password:passlg},
//         success:function(respuesta){

//             $('.doble').html(respuesta);
//             $('#email').val('');
//             $('#pass').val('');

//             Swal.fire({
//                 position: 'top-center',
//                 icon: 'success',
//                 title: 'Los datos fueron guardados exitosamente.',
//                 showConfirmButton: false,
//                 timer: 3000
//             });
//         // 	boton = document.getElementById('btnrg');
//         //     boton.style.display = '';

//         // $('#boton1').click(function(){

//         // 	$('#resultado').html('');
//         // 	boton.style.display='none';
//         // })

//         }

//     })
// })
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
                // location.href='http://localhost/Login/usuario/usuario.php';
//             } else{
//             //    nada xd
//             }
//         }else{
            // $('.btnrg').click(function(){
            //     nom = $('#email').val(' ');
            //     nom = $('#pass').val(' ');
            // });

            // Swal.fire({
            //     icon: 'error',
            //     title: 'Oops...',
            //     text: 'Something went wrong!',
            //     footer: '<a href="">Why do I have this issue?</a>'
            // })
            
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









