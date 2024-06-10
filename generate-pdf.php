<?php

use Dompdf\Dompdf;

require_once __DIR__ . "/vendor/autoload.php";


use Dompdf\Options;


$name               = $_POST["name-field"];
$designation        = $_POST["designation"];
$email              = $_POST['email-field'];
$phone_number       = $_POST['phone-field'];
$address            = $_POST['address-field'];
$school             = $_POST['school-field'];
$faculty            = $_POST['faculty-field'];
$start_date_school  = $_POST['start-date-field'];
$end_date_school    = $_POST['end-date-field'];
$job_title          = $_POST['job-title-field'];
$start_date_job     = $_POST['start-date-duration-field'];
$end_date_job       = $_POST['end-date-duration-field'];
$skills             = $_POST['skills-field'];

/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "potrait");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("template.html");

$html = str_replace(
    ["{{Name}}", "{{Designation}}", "{{Email}}", "{{Phone}}", "{{Address}}", "{{School}}", "{{Faculty}}", "{{Start Date School}}", "{{End Date School}}", "{{Job Title}}", "{{Start Duration}}", "{{End Duration}}", "{{Skills}}"],
    [$name, $designation, $email, $phone_number, $address, $school, $faculty, $start_date_school, $end_date_school, $job_title, $start_date_job, $end_date_job, $skills],
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
$sql = "INSERT INTO user_meta_data (user_id,docs_path, doc_type) VALUES ($id, '$file_path','Curriculum Vitae')";
mysqli_query($conn, $sql);

// Optionally, you can stream the PDF to the browser with a dynamic filename
$dompdf->stream($filename, ["Attachment" => 0]);
