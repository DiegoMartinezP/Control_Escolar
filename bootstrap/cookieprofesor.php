
 <?php
$user =$_GET['idu'];
if ($user =='')
{
$msg="No iniciaste secion";
header("location:acceso.php?msg=$msg");
exit;
}

setCookie(usuario,$user);
setCookie(acceso,2);
setCookie(tipo,'Profesor');
header('location:paginaprofesor.php');
exit;
?>      