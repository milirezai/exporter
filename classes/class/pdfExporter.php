<?php

class pdfExporter extends exporter
{
    protected $format = ".pdf";

    public function export($name)
    {
        require_once "vendor/autoload.php";
        $mpdf = new \Mpdf\Mpdf();
        // title
        $mpdf->SetHTMLHeader($this->data['title']);
        // content
        $mpdf->WriteHTML($this->data['content']);
        // Output a PDF file directly to the browser
        $mpdf->Output($name . '.pdf', 'D');
    }
}
