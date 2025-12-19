<?php

//definir mensagem em html
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Innova Soluções <contato@innovasolu.com.br> ";

// Seu email aqui
$emailadmin = "contato@innovassolu.com.br";

// seu site
$siteadmin ="http://www.innovasolu.com.br";

// O nome da companhia
$nomesite = "Innova Soluções";

// pega a data do servidor
$date = date("m/d/Y H:i:s");

//definir os inputs
$inputNome = $_POST['inputNome'];
$inputDdd = $_POST['inputDdd'];
$inputTelefone = $_POST['inputTelefone'];
$inputEmail =$_POST['inputEmail'];
$inputMensagem = $_POST['inputMensagem'];


$mens = "<body>";
$mens .= "<font face=\"Verdana, Geneva, sans-serif\" size=\"+1\"><b>Mensagem do Site</b></font>";
$mens .= "<p>";
$mens .= "<font face=\"Verdana, Geneva, sans-serif\" size=\"-1\">";
$mens .= "<b>Nome:</b>";
$mens .= "$inputNome";
$mens .= "<br>";
$mens .= "<b>Telefone:</b>";
$mens .= "$inputDdd";
$mens .= "$inputTelefone";
$mens .= "<br>";
$mens .= "<b>Email:</b>";
$mens .= "$inputEmail";
$mens .= "<br>";
$mens .= "<b>Mensagem:</b>";
$mens .= "<br>";
$mens .= "$inputMensagem";
$mens .= "<br>";
$mens .= "<b>Data/Hora:</b>";
$mens .= "$date";
$mens .= "</font>";
$mens .= "</body>";

mail("contato@innovasolu.com.br","Contato Site Innova Soluções","$mens", "$headers");




//Aqui envia um email de confirmação para o usuário
mail("$inputEmail","Obrigado por visitar $nomesite", "Olá" . " " . "$inputNome" . ", " . "Em breve entraremos em contato! Innova Soluções","$headers");

//retornar a página
echo "<meta http-equiv='refresh' content='2; URL=contato.html'>"
?>

