<?php
$toEmail = "contato@cartecheletrica.com/";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>Email enviado</p>";
} else {
print "<p class='Error'>Houve um erro ao enviar o email.</p>";
}
?>