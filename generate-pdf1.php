<?php

use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";

use Dompdf\Options;


$date           = $_POST["date-field"];
$person         = $_POST["person-field"];
$address        = $_POST['address-field'];
$office         = $_POST['office-field'];
$district       = $_POST['district-field'];
$mun            = $_POST['mun-field'];
$ward           = $_POST['ward-field'];
$map            = $_POST['map-field'];
$kitta          = $_POST['kitta-field'];
$name           = $_POST['name-field'];


/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);


$dompdf = new Dompdf();

// Load the font
// $font = $dompdf->getFontMetrics()->getFont('vendor/dompdf/dompdf/lib/fonts/ARAP 11 Regular.ttf');

// Set the font for the entire document
// $dompdf->setFont($font);


/**
 * Set the paper size and orientation
 */

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("bidhut-form.html");

$html = str_replace(
    ["{{Date}}", "{{Office}}", "{{Person}}", "{{Address}}", "{{District}}", "{{mun}}", "{{ward}}", "{{map}}", "{{kitta}}", "{{name}}"],
    [$date, $office, $person, $address, $district, $mun, $ward, $map, $kitta, $name],
    $html
);


$dompdf->loadHtml($html);


/**
 * Create the PDF and set attributes
 */
$dompdf->render();

/**
 * Save the PDF file locally
 */
$filename = 'resume_' . date('Ymd_His') . '.pdf';

// Set the path to save the PDF file
$file_path = 'user_docs/' . $filename;

// Save the PDF file locally
file_put_contents($file_path, $dompdf->output());

include "includes/connection.php";
session_start();

$id = $_SESSION['id'];
// Store the file path in the database
$sql = "INSERT INTO user_meta_data (user_id,docs_path, doc_type) VALUES ($id, '$file_path','Electricity Application')";
mysqli_query($conn, $sql);

$dompdf->setPaper('A4', 'portrait');

/**
 * Save the PDF file locally
 */
$output = $dompdf->output();

// Optionally, you can stream the PDF to the browser
$dompdf->stream("", ["Attachment" => 0]);

// Optionally, you can add metadata
//$dompdf->addInfo("Title", "An Example PDF");

// Optionally, you can add metadata in earlier versions of Dompdf
//$dompdf->add_info("Title", "An Example PDF");
