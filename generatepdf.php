<?php

require 'vendor/autoload.php';

$content = file_get_contents($argv[1]);

$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('output.pdf', 'F');
