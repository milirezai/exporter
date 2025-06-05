<?php
   include "./vendor/autoload.php";
class pdfExporter{
    protected $format= ".pdf";

    public  function export(){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
      }

}
$pdf=new pdfExporter();
$pdf->export();

 