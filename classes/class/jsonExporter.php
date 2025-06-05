<?php
 class jsonExporter extends exporter{
    protected $format= '.json';
    public  function export($name){
        $fileName=$name.$this->format;
          $filePath= __DIR__."/files/$fileName";
        file_put_contents($filePath,json_encode($this->data));
     }

}
 