<?php
 require_once ('insert.php');
class UserFacade {
 
        /**
         * @return string
         */
        public function getUser() {
 
                /*$sName = 'Gu';
                $sName .= ' Francisco';*/
                $sName = InsertTeste();
                //return $sName;
        }
}
 
$oSoapServer = new SoapServer('service.wsdl');
$oSoapServer->setClass("UserFacade");
$oSoapServer->handle();
?>