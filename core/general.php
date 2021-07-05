<?php
$response = array('Success' => false, 'Message' => 'Invalid Request');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && !empty($_GET['action'])) {
    require_once('dbconnection.php');
    $request = $_POST;
    switch($_GET['action']) {
        case 'ConactFormSave':
        $sql = "INSERT INTO Contacts (FirstName, Email, Country, State, City, Phone, FindUs, Message) VALUES ('" .$request['contact_first_name'] . "', '" .$request['contact_email'] . "', '". $request['country'] . "', '". $request['state'] . "', '". $request['city'] . "', '". $request['contact_phone'] ."', '". $request['contact_findUs']."', '". $request['contact_message']."')";
        
        if ($conn->query($sql) === TRUE) {
            
            // Contact Information to Client
            sendEmail('info@ditstek.com', "Contact Information", userInformationHtml($request));
            //sendEmail('tarunwadhwawins@gmail.com', "Contact Information", userInformationHtml($request));
            
            // Thank you email to User
            sendEmail($request['contact_email'], 'Thank you for Contact', 'Thank you for contacting Ditstek Innovations. Our team will get back to you shortly with the next steps.');
            $response = array('Success' => true, 'Message' => 'Thank you for contacting Ditstek Innovations. Our team will get back to you shortly with the next steps. ');
        } else {
            $response = array('Success' => false, 'Message' => 'Error while submitting information.');
        }
        break;
    }
}

function userInformationHtml($request) {
    $html = '<p><strong>First Name</strong> : '. $request['contact_first_name'].'</p>';
    $html .= '<p><strong>Last Name</strong> : '. $request['contact_last_name'].'</p>';
    $html .= '<p><strong>Email</strong> : '. $request['contact_email'].'</p>';
    //   $html .= '<p><strong>Email</strong> : '. $request['contact_company'].'</p>';
    $html .= '<p><strong>Phone</strong> : '. $request['contact_phone'].'</p>';
    $html .= '<p><strong>Find Us</strong>: '. $request['contact_findUs'].'</p>';
    $html .= '<p><strong>Message</strong>: '. $request['contact_message'].'</p>';
    
    return $html;
}

function sendEmail($to_email, $subject, $message) {
    try {
        $from_email = 'info@ditstek.com';
        $mailheader = "From: ".$from_email."\r\n"; 
        $mailheader .= "Reply-To: ".$from_email."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 


        mail($to_email, $subject, $message, $mailheader) or die('error'); 
    } catch(Exception $ex) {
        echo '<pre>';print_r($ex);die;
    }
}

header('Content-Type: application/json');
echo json_encode($response);die;
?>