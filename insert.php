<?php 

function InsertTeste($xml) {
    
    require_once ('mysql_crud.php');

    //$dados = $xml->documentElement;
    //foreach ($dados->childNodes AS $dado) {
        $id = 1000020; //$dado->space_id;
        $name = "A";// $dado->name;
        $desc = "teste"; $dado->description;
        $date = "2019-04-26 00:00:00"; //$dado->DateOccupation;
    //}
    $db = new Database();
    $db->connect();

    $db->insert('T_VagaLinha',array('T_VagaLinha_id'=>$id,'Description'=>$desc, 
    'DateOccupation'=> $date, 'T_Vaga_ID'=>1000002));
    $res = $db->getResult();
    $res .= "Insert T_VagasLinha: "+$res;
    return $res;
}

?>