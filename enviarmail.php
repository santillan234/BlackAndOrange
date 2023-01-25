<?php
//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
//Uncomment next line if you're not using a dependency loader (such as Composer)
require_once 'sendgrip/sendgrid-php.php';

use SendGrid\Mail\Mail;

if(isset($_POST['enviarmensaje']))
{
	$name = $_POST['name'];
	$email_id = $_POST['email'];
	$message = $_POST['message'];

	$email = new Mail();
	$email->setFrom("administrador@rodrigosantillan.com.ar", "Página Web");
	$email->setSubject("Nuevo Mensaje");
	$email->addTo("santillanrodrigo234@gmail.com", "Rodrigo Santillan");
	// $email->addContent("text/plain", $message);
	$email->addContent("text/html", "<p>De: $name / $email_id</p><h5>$message</h5>");

	$sendgrid = new \SendGrid('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');
	try {
			$response = $sendgrid->send($email);
			print $response->statusCode() . "\n";
			print_r($response->headers());
			print $response->body() . "\n";
	} catch (Exception $e) {
			echo 'Caught exception: '.  $e->getMessage(). "\n";
	}
}

// echo "<script>                             ----> Si funciona
// 				alert('Tarea');              
// 				window.location='index.php';
// 			</script>";

header("Location: index.php");

// echo "<script>                             ----> No funciona
// 				Swal.fire({
// 					position: 'center',
// 					icon: 'success',
// 					title: 'Mensaje Enviado!',
// 					showConfirmButton: false,
// 					timer: 1500,  
// 				});
// 				window.location='index.php';
// 			</script>";

// echo "<script> 
// 				$(function(){ 
// 					Swal.fire({ 
// 						position: 'center',
// 						icon: 'success',
// 						title: 'Mensaje Enviado!',
// 						showConfirmButton: false,
// 						timer: 1500,  
// 					}); 
// 					window.location='index.php'; 
// 				}); 
// 			</script>";

// echo "<script>	
//             $(document).ready(function () {
//                 Swal.fire({
//                     title: 'Error!',
//                     html: "Texto de <strong>error</strong> usando <i>html</i>",
//                     icon: 'error',
//                     confirmButtonText: 'Entendido'
//                 });
//             });
//         </script>";

?>