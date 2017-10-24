<?php
class rumah{
public $kamar;
public $type;
public $kamarmandi;

public function __construct($kamar,$type,$kamarmandi){
	$this->kamar=$kamar;
	$this->type=$type;
	$this->kamarmandi=$kamarmandi;
}
public function get_kamar(){
return $this->kamar;
}
public function get_type(){
return $this->type;
}
public function get_mandi(){
return $this->kamarmandi;	
}

}
?>