<pre>
<?php
 
ini_set("soap.wsdl_cache_enabled", "0");
//require_once ('server.php');
// A seguir você devera informar a URL do webservice.
$oSoapClient = new SoapClient("./service.wsdl");
 
$aOptions = array (
       "start_debug"=> "1",
       "debug_port"=> "10000",
       "debug_host"=> "localhost",
       "debug_stop"=> "1");
 
foreach($aOptions as $key => $val) {
        $oSoapClient->__setCookie($key,$val);
}





var_dump($oSoapClient->getUser());
//echo $oSoapClient->getUser(); https://pt.stackoverflow.com/questions/177554/troca-de-xml-entre-service-e-cliente
?>
</pre>
[<a href=".">Voltar</a>]