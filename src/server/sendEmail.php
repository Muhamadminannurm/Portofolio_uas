<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"));

    $fromEmail = $data->from_email;
    $fromName = $data->from_name;
    $subject = $data->subject;
    $message = $data->message;

    // You can customize the email content and recipient as needed
    $toEmail = "muh.minannurmualim@gmail.com";

    // Send email
    $headers = "From: $fromName <$fromEmail>\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $mailResult = mail($toEmail, $subject, $message, $headers);

    if ($mailResult) {
        http_response_code(200);
        echo json_encode(["message" => "Email sent successfully!"]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Failed to send email"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>
