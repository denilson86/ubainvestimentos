<?php
    header('Access-Control-Allow-Origin: *');
    $destino = "ubainvestimento3c@gmail.com";
    $assunto = "Lead Capturado pelo site";

    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //Corpo do email
    $bodys = "";
    $bodys .= '<b>Nome: </b>'.$_POST['name'].'<br><br>';
    $bodys .= '<b>e-mail: </b>'.$_POST['mail'].'<br><br>';
    $bodys .= '<b>Fone: </b>'.$_POST['fone'].'<br><br>';
    $bodys .= '<b>comentario: </b>'.$_POST['coment'].'<br><br>';
    $body = stripslashes($bodys);
    
    $response = mail($destino, $assunto, $body, $headers);
    
    //var_dump($response);
    //$result = (bool) array("result"=>false);
    echo json_encode($response);

?>