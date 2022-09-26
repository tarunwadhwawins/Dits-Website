<?php
$response = array('Success' => false, 'Message' => 'Invalid Request');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && !empty($_GET['action'])) {
    require_once('dbconnection.php');
    $request = $_POST;
    switch($_GET['action']) {
        case 'ConactFormSave':
        $sql = "INSERT INTO contacts (FirstName, Email, Country, State, City, Phone, FindUs, Message,URL,IP) VALUES ('" .mysqli_real_escape_string($conn,$request['contact_first_name']) . "', '" .mysqli_real_escape_string($conn,$request['contact_email']) . "', '". mysqli_real_escape_string($conn,$request['country']) . "', '". mysqli_real_escape_string($conn,$request['state']) . "', '".mysqli_real_escape_string($conn,$request['city'])  . "', '". mysqli_real_escape_string($conn,$request['contact_phone']) ."', '". mysqli_real_escape_string($conn,$request['contact_findUs'])."', '". mysqli_real_escape_string($conn,$request['contact_message'])."', '". mysqli_real_escape_string($conn,$_SERVER['HTTP_REFERER']) ."', '". mysqli_real_escape_string($conn,$_SERVER['REMOTE_ADDR']) ."')";
        
        if ($conn->query($sql) === TRUE) {
            
            // Contact Information to Client
            sendEmail('info@ditstek.com', "Contact Information", userInformationHtml($request));
            
            // Thank you email to User
            $message = customerEmailData($request['contact_first_name']);
            sendEmail($request['contact_email'], 'Thank you for Contact', $message);
            $response = array('Success' => true, 'Message' => 'Thank you for contacting Ditstek Innovations. Our team will get back to you shortly with the next steps. ');
        } else {
            $response = array('Success' => false, 'Message' => 'Error while submitting information.');
        }
        break;
        case 'QuotesFormSave':
        $sql = "INSERT INTO contacts (FirstName, Email, Country, State, City, Phone, FindUs, Message,URL,IP) VALUES ('" .mysqli_real_escape_string($conn,$request['quotes_first_name']) . "', '" .mysqli_real_escape_string($conn,$request['quotes_email']) . "', '". mysqli_real_escape_string($conn,$request['country'])  . "', '". mysqli_real_escape_string($conn,$request['state'])  . "', '". mysqli_real_escape_string($conn,$request['city'])  . "', '". mysqli_real_escape_string($conn,$request['quotes_phone'])  ."', '". mysqli_real_escape_string($conn,$request['quotes_findUs']) ."', '". mysqli_real_escape_string($conn,$request['quotes_message']) ."', '". mysqli_real_escape_string($conn,$_SERVER['HTTP_REFERER']) ."', '". mysqli_real_escape_string($conn,$_SERVER['REMOTE_ADDR']) ."')";
        if ($conn->query($sql) === TRUE) {
            
            // Contact Information to Client
            sendEmail('info@ditstek.com', "Contact Information", userInformationHtml($request));
            
            // Thank you email to User
            $message = customerEmailData($request['quotes_first_name']);
            sendEmail($request['quotes_email'], 'Thank you for Contact', $message);
            $response = array('Success' => true, 'Message' => 'Thank you for contacting Ditstek Innovations. Our team will get back to you shortly with the next steps. ');
        } else {
            $response = array('Success' => false, 'Message' => 'Error while submitting information.');
        }
        break;
    }
}


function userInformationHtml($request) {
    $html = '<p><strong>First Name</strong> : '. $request['contact_first_name'].'</p>';
    $html .= '<p><strong>Email</strong> : '. $request['contact_email'].'</p>';
    $html .= '<p><strong>Country</strong> : '. $request['country'].'</p>';
    $html .= '<p><strong>State</strong> : '. $request['state'].'</p>';
    $html .= '<p><strong>City</strong> : '. $request['city'].'</p>';
    $html .= '<p><strong>Phone</strong> : '. $request['contact_phone'].'</p>';
    $html .= '<p><strong>Find Us</strong>: '. $request['contact_findUs'].'</p>';
    $html .= '<p><strong>Message</strong>: '. $request['contact_message'].'</p>';
    
    return $html;
}

function userInformationHtmlQuotes($request) {
    $html = '<p><strong>First Name</strong> : '. $request['quotes_first_name'].'</p>';
    $html .= '<p><strong>Email</strong> : '. $request['quotes_email'].'</p>';
    $html .= '<p><strong>Country</strong> : '. $request['country'].'</p>';
    $html .= '<p><strong>State</strong> : '. $request['state'].'</p>';
    $html .= '<p><strong>City</strong> : '. $request['city'].'</p>';
    $html .= '<p><strong>Phone</strong> : '. $request['quotes_phone'].'</p>';
    $html .= '<p><strong>Find Us</strong>: '. $request['quotes_findUs'].'</p>';
    $html .= '<p><strong>Message</strong>: '. $request['quotes_message'].'</p>';
    
    return $html;
}

function customerEmailData($Name) {
    $email_content = '<!doctype html>
                        <html>
                        <head>
                        <meta charset="utf-8">
                        <title>Ditstek Innovations : Email Verification </title>
                        <link rel="icon" type="image/x-icon" href="images/favicon.png">
                        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
                        </head>
                        <body style="width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;font-family: Lato, sans-serif;">
                        <table cellpadding="0" cellspacing="0" align="center" border="0" style="max-width:610px;width:100%;margin:auto;padding:0;background-color:#ffffff;color:#222222;overflow:hidden;border-left:1px solid #eee;border-right:1px solid #eee">
                          <tbody>
                            <tr>
                              <td><table align="center" valign="middle" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;margin:0;padding:0;background-color:#49535c;text-align:center">
                                  <tbody>
                                    <tr>
                                      
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr style="max-width:610px;width:100%;box-sizing:border-box">
                              <td><table align="center" valign="middle" cellpadding="0" cellspacing="0" border="0" style="overflow:hidden;max-width:610px;width:100%;box-sizing:border-box;margin:0;padding:30px 15px 10px">
                                  <tbody>
                                    <tr>
                                      <td style="text-align:left"><p style="color:#575f62;font-family:Lato,sans-serif;font-size:18px;line-height:20px;margin-top:0;margin-bottom:20px;padding:0;text-align:left;"> Hi, '.$Name.' </p>
                                        <p style="color:#575f62;font-family:Lato,sans-serif;font-size:15px;line-height:19px;margin-top:0;margin-bottom:20px;padding:0;font-weight:normal;text-align:left;">Thank you for contacting Ditstek Innovations. <br>
                                          Our team will get back to you shortly with the next steps. </p>
                                        <p style="color:#575f62;font-family:Lato,sans-serif;font-size:15px;line-height:19px;margin-top:0;margin-bottom:20px;padding:0;"> Regards<br>
                                          Ditstek team </p></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr style="box-sizing:border-box;background-color:#fff;height:22px">
                              <td style="text-align:center;border-left:1px solid #eee;border-right:1px solid #eee">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><table align="center" valign="center" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;background-color:#193370;padding:30px 20px 5px;box-sizing:border-box">
                                  <tbody>
                                    <tr>
                                      
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                            <tr>
                              <td><table align="center" valign="center" cellpadding="0" cellspacing="0" border="0" style="max-width:610px;width:100%;overflow:hidden;background-color:#193370;padding:10px;box-sizing:border-box">
                                  <tbody>
                                    <tr>
                                      <td><p style="color:#fff;font-size:13px;line-height:15px;margin:0;padding:0;font-weight:normal;text-align:center;font-family:Lato,sans-serif">SCO - 356 , First Floor, 44-D, Chandigarh, 160047</p></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table>
                        </body>
                        </html>';
    return $email_content;
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