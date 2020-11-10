<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$id=$_GET['id_formato'];
// Introducimos HTML de prueba
function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
 $html=file_get_contents("http://localhost/telematica/view/reporte_pdf/pdf_final/058.php?id_formato=".$id);

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$pdf = new DOMPDF($options);

$canvas = $pdf->getCanvas(); 
 
$w = $canvas->get_width(); 
$h = $canvas->get_height(); 
 
$imageURL = '../../view/media/photos/logo.png'; 
$imgWidth = 400; 
$imgHeight =400; 
 
$canvas->set_opacity(.5); 
 
$x = (($w-$imgWidth)/2); 
$y = (($h-$imgHeight)/2); 
 
$canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight); 


// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter", "landscape");

//$pdf->set_paper(array(0,0,104,250));

// Cargamos el contenido HTML.
$pdf->load_html($html,'UTF-8');

// Renderizamos el documento PDF.
$pdf->render();

// Enviamos el fichero PDF al navegador.
$pdf->stream('formato_058-id-'.$id.'.pdf');
?>