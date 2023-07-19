<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// reads a file into a string
$page = file_get_contents("page.html"); 

$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($page);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream();


?>