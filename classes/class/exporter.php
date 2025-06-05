<?php
 include ('classes/interface/exportAble.php');
 
abstract class exporter implements exportAble {
    protected $format;
    protected $data;

    public function __construct($data){
         $this->data=$data;
         if (!$this->isValid()) {
            die("in valid data");
         }
    }
    public function isValid(){
foreach ($this->data as $fields) {
    if (empty($fields)) {
        return false;
    }
    return true;
}
    }

}
