<?php
 
class textExporter extends exporter 
{ 
    protected $format= ".txt";

    public  function export($name){
        $fileName=$name.$this->format;
          $filePath= __DIR__."/files/$fileName";
        file_put_contents($filePath,"{$this->data['title']}\n{$this->data['content']}");
     }

}