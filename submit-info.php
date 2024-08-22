<?php
session_start();
require 'backend/db.php';
if($_SERVER['REQUEST_METHOD'] != 'POST') {

    echo "Something went wrong. Try again or contact R and L Barbershop.";
    exit;
  } else {
require_once 'vendor/autoload.php';

$_SESSION['book'] = 'appointment';

$token = $_POST['stripeToken'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$_SESSION['name'] = $name;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;



/// create stripe customer

// $stripe = new \Stripe\StripeClient('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');

$stripe = new \Stripe\StripeClient('sk_test_51MtyHaJtFce07bxBsOngqA8fSg9Cvwe1ZuZXEJMM7helLduhNUpHloYluS9G4TIrKNhEQmhBMaRq9kqHam1zvABy00vv12Lxw9');


$customer = $stripe->customers->create([
    'description' => $name,
    'email' => $email,
    'source' => $token
]);

$customerid = $customer->id;


$checkout_session = $stripe->checkout->sessions->create([
  'payment_method_types' => ['card'],
  'mode' => 'setup',
  'ui_mode' => 'embedded',
  'return_url' => 'http://localhost/stripe-v3/index-2.php?session_id={CHECKOUT_SESSION_ID}',
//   'cancel_url' => 'http://localhost/stripe-v3/cancel',
  'customer' => $customer
]);


$services = filter_var($_POST['services_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// print_r($services);
// var_dump($_POST['services_title']);
// exit();
    
    $event_day = filter_var($_POST['event_day'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    $event_date = filter_var($_POST['event_date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $time_available = filter_var($_POST['select-stylist-avail-time'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $stylist_name = filter_var($_POST['stylist_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($stylist_name == ''){
      $_SESSION['stylist-name-empty'] = "Select a technician, then re-select your appointment time.";
        header("location: book_appointment_4.php");
        exit();
      }

    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $service_price = filter_var($_POST['service_price'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $service = [];
    // foreach($_POST['service_price'] as $price) {
    //     $service = $price;
    // }
    // var_dump($service);
    // exit();
    // $services_description = filter_var($_POST['services_description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
    
    // $time_available = filter_var($_POST['time_available'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $messages = filter_var($_POST['messages'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $service_price = [];
    // foreach($_POST['service_price'] as $price) {
    //     $service_price = $price;
    // }

    foreach($_POST['services_title'] as $service_title) {


        $service_price_query ="SELECT service_price, service_time FROM services_chosen WHERE service_title = '$service_title'";
        
        $service_price_result = mysqli_query($conn, $service_price_query);



        while($price_for_service = $service_price_result->fetch_assoc()) {
            $price = $price_for_service['service_price'];
            $time = $price_for_service['service_time'];
        
                         
        if(($service_price_result) -> num_rows > 0) {

        $get_stylist_email_query = "SELECT stylist_email FROM stylist_info WHERE stylist_name = '$stylist_name'";

        $get_stylist_email_result = mysqli_query($conn, $get_stylist_email_query);

        while($email_row = $get_stylist_email_result->fetch_assoc()) {
            $get_stylist_email = $email_row['stylist_email'];
        
            // echo $get_stylist_email;
                    
        $subject = "Appointment Confirmation";
        // $subject = $_POST['subject'];
        $messages = $_POST['messages'];

        $to = "$email";
        // $to = "contact@randlbarbershop.sandbox.vergildkelley.com";
        // "CC:" . $get_stylist_email; 
        // "CC: info@webqwick.com";
         
        // $to = "info@webqwick.com";
        // $webqwick = "info@webqwick.com";
        // $verg = "verg_1@yahoo.com";
        // $cc = $get_stylist_email;
        
        // $headers .= 'CC:' . $cc . "\r\n";
        // $headers .= "From: R&L Barbershop";
        
        
               
        
        
 $message = "
 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>R&L Barbershop</title>

    <style type='text/css'>
    @media screen and (max-width: 599px) {
        .button, .button-dark {
            font-size: 22px !important;
        }
        .titles {
            font-size: 30px !important;
        }

        p {
            font-size: 25px !important;
            line-height: 1.2 !important;
        }
        .two-columns.last .column {
            max-width: 600px !important;
            margin-left: 55px !important;
            
  }
        .three-columns .column {
            width: 100%;
            min-width:580px;
            
  }
        .larger-img {
            min-width: 413px;
            min-height: 448px;
        }
}
    /* @media screen and (max-width: 599px) {
  .two-columns {
    background-color: lightgreen;
  }
  .three-columns.column {
    width: 100%;
    max-width:90vw;
  }
} */
    </style>
  </head>
  <body style='margin:0;background-color:#cccccc;'>
    <center class='wrapper' style='background-color:#ccc;width:100%;table-layout:fixed;background-color:#cccccc;padding-bottom:60px;'>
      <table class='main' width='100%' style='background-color:#ffffff;margin:0 auto;width:100%;max-width:600px;border-spacing:0;font-family:sans-serif;color:#171a1b;'>
        <!-- TOP BORDER -->
        <tr>
          <td height='8' style='padding:0;background-color: #171a1b;'></td>
        </tr>
        <!-- LOGO SECTION -->
        <tr>
          <td style='padding: 14px 0 4px;'>
            <table width='100%' style='border-spacing:0;'>
              <tr>
                <td class='two-columns' style='padding:0;text-align:center;font-size:0;'>
                  <table class='column' style='border-spacing:0;width:100%;max-width:300px;display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td style='padding: 0 62px 10px;'>
                        <h1 style='font-size: 24px;'>Appointment Confirmation</h1>
                      </td>
                      <!-- <td style='padding: 0 62px 10px;'>
                                            <a href='https://randlbarbershop.sandbox.vergildkelley.com/'><img src='https://randlbarbershop.sandbox.vergildkelley.com/images/randl_logo-3.png' alt='R&L Barbershop Logo' width='180px' title='R&L Barbershop'><a>
                                        </td> -->
                    </tr>
                  </table>
                  <table class='column' style='border-spacing:0;width:100%;max-width:300px;display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td style='padding: 10px 90px;'>
                        
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- BANNER IMAGE -->
        <tr>
          <td style='padding:0;'>
            <a href='https://your.barbershop.vergildkelley.com/index.php' target='_blank'><img src='https://your.barbershop.vergildkelley.com/img/pic3.jpg' alt='Your barbershop image' width='600' style='border:0;max-width: 100%;'></a>
          </td>
        </tr>
        <!-- THREE COLUMN SECTION -->
        <tr>
          <td style='padding:0;'>
            <table width='100%' style='border-spacing:0;'>
              <tr>
                <td class='three-columns' style='padding:0;text-align:center;font-size:0;padding:15px 0 25px;'>
                  <table class='column' style='border-spacing:0; width:100%;max-width:200px; display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td class='padding' style='padding:0;padding:15px;'>
                        <table class='content' style='border-spacing:0;font-size:15px;line-height:20px;padding:0 5px;'>
                          <tr>
                            <td style='padding:0;'>
                              <img class='larger-img' src='https://your.barbershop.vergildkelley.com/img/pic7.jpg' alt='barber beard trim' width='130' style='border:0;max-width: 130px;'>
                            </td>
                          </tr>
                          <tr>
                            <td style='padding:0;'>
                              <p class='titles' style='font-weight: bold; font-size:17px; margin-top: 10px'>Walk-ins Welcome</p>
                              <p></p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <table class='column' style='border-spacing:0; width:100%;max-width:200px; display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td class='padding' style='padding:0;padding:15px;'>
                        <table class='content' style='border-spacing:0; font-size:15px;line-height:20px;padding:0 5px;'>
                          <tr>
                            <td style='padding:0;'>
                              <img class='larger-img' src='https://your.barbershop.vergildkelley.com/img/pic9.jpg' alt='barber shave' width='130' style='border:0;max-width: 130px;'>
                            </td>
                          </tr>
                          <tr>
                            <td style='padding:0;'>
                              <p class='titles' style='font-weight: bold; font-size:17px; margin-top: 10px'>Licensed Technicians</p>
                              <p></p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <table class='column' style='border-spacing:0; width:100%;max-width:200px; display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td class='padding' style='padding:0;padding:15px;'>
                        <table class='content' style='border-spacing:0;font-size:15px;line-height:20px;padding:0 5px;'>
                          <tr>
                            <td style='padding:0;'>
                              <img class='larger-img' src='https://your.barbershop.vergildkelley.com/img/pic17.jpg' alt='hair cut' width='130' style='border:0;max-width: 130px;'>
                            </td>
                          </tr>
                          <tr>
                            <td style='padding:0;'>
                              <p class='titles' style='font-weight: bold; font-size:17px; margin-top: 10px'>Name Brands</p>
                              <p></p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td style='padding:0;background-color: #26292b; color: #fff;'>
            <table width='100%' style='border-spacing:0;'>
              <tr>
                <td class='two-columns last' style='padding:0;text-align:center;font-size:0;padding:15px 0;'>
                  <table class='column' style='border-spacing:0;width:100%;max-width:300px;display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td class='padding' style='padding:0;padding:20px;'>
                        <table class='content' style='border-spacing:0;font-size:15px;line-height:20px;text-align:left;'>
                          <tr>
                            <td style='padding:0;'>
                              <img class='larger-img' src='https://your.barbershop.vergildkelley.com/img/pic38.jpg' alt='hair wash' width='260' style='border:0;max-width: 260px;'>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <table class='column' style='border-spacing:0;width:100%;max-width:300px;display:inline-block;vertical-align:top;text-align:center;'>
                    <tr>
                      <td class='padding' style='padding:0;padding:20px;'>
                        <table class='content' style='border-spacing:0;font-size:15px;line-height:20px;text-align:left;'>
                          <tr>
                            <td style='padding:0;'>
                              <p style='font-weight: bold; font-size: 18px;'>Your appointment is confirmed.</p>
                              <p>Service: $service_title</p>
                              <p>Fee: $$price</p>
                              <p>Estimated Time: $time min</p>
                              <p>Date: $event_day, $event_date</p>
                              <p>Time: $time_available</p>
                              <p style='padding-bottom: 16px;'>Technician: $stylist_name</p>
                              <!-- <a href='#' class='button' style='background-color:#fff;color:#171a1b;text-decoration:none;padding:12px 20px;border-radius:5px;font-weight:bold;'>Book another appointment</a> -->
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- TITLE, TEXT & BUTTON -->
        <tr>
          <td style='padding: 15px 0 50px;'>
            <table width='100%' style='border-spacing:0;'>
              <tr>
                <td style='text-align: center; padding: 15px;'>
                  <p class='titles' style='font-size: 20px; font-weight: bold;'>Thank you for choosing <br /> Your Barbershop</p>
                  <p style='line-height: 20px; font-size: 15px; padding: 5px 0 15px;'>Take care of all of your grooming needs in one place. You can visit online to see the latest styles and grooming products.</p>
                  <a class='button-dark' href='https://your.barbershop.vergildkelley.com/' style='background-color:#171a1b;color:#fff;text-decoration:none;padding:12px 20px;border-radius:5px;font-weight:bold;' target='_blank'>Visit us online</a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- FOOTER SECTION -->
        <tr>
          <td style='padding:0;background-color: #26292b;'>
            <table width='100%' style='border-spacing:0;'>
              <tr>
                <td style='text-align: center; padding: 45px 20px; color: #fff;'>
                  <p style='padding: 5px; font-size: 22px;'>Your Barbershop</p>
                  <a href='tel:+19803351233' style='padding: 5px; font-size: 22px; color: #fff; text-decoration: none;'>(555)555-5555</a>
                  <p>1234 Some Street</p>
                  <p>Someplace, IL 12345</p>
                  <p style='padding: 5px;'>Mon - Fri 9am to 6pm</p>
                  <p>Sat 9am to 5pm</p>
                  <p>Sun Closed</p>
                  <!-- <p style='padding: 5px;'>Subscribe</p> -->
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>";
        
        
        
        
        
        
        // $headers .='CC:' . $verg . "\r\n";
        $body = "";

        // $body .="Client: " . $name . "\r\n";
        // $body .="Email: " . $email . "\r\n";
        // $body .="CC:" . $cc . "\r\n";
        // $body .="Phone: " . $phone . "\r\n";
        // $body .="Appointment Date: " . $event_day . " " . $event_date . "\r\n";
        // $body .="Appointment Time: " . $time_available . "\r\n";
        // $body .="Service: " . $service_title . "\r\n";

        // $body .="Technician: " . $stylist_name . "\r\n";
        // $body .="Client Notes: " . $messages . "\r\n";
        
        
        


        
        
        
        
        // Always set content-type when sending HTML email
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            $headers .= 'From: Your Barbershop <contact@yourbarbershop.sandbox.vergildkelley.com>';
            $headers .= 'Cc: ' . $stylist_name . " " . $get_stylist_email . "\r\n";
            // 'Cc' => 'Sam <sam@randlbarbershop.sandbox.vergildkelley.com>',
            // 'Cc' => 'Manager <contact@randlbarbershop.sandbox.vergildkelley.com>',

            
        //     $headers = ['X-Sender' => 'Your Barbershop <contact@yourbarbershop.sandbox.vergildkelley.com>',
        //     'X-Mailer' => 'PHP/' . phpversion(),
        //     'X-Priority' => '1',
        //     'Return-Path' => 'contact@randlbarbershop.sandbox.vergildkelley.com',
        //     'MIME-Version' => '1.0',
        //     'Content-Type' => 'text/html; charset=iso-8859-1'
        // ];



                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                $headers = [
                'From' => 'Your Barbershop <contact@randlbarbershop.sandbox.vergildkelley.com>',
                'Cc' => 'Sam <sam@randlbarbershop.sandbox.vergildkelley.com>',
                'X-Sender' => 'R&L Barbershop <contact@randlbarbershop.sandbox.vergildkelley.com>',
                'X-Mailer' => 'PHP/' . phpversion(),
                'X-Priority' => '1',
                'Return-Path' => 'contact@randlbarbershop.sandbox.vergildkelley.com',
                'MIME-Version' => '1.0',
                'Content-Type' => 'text/html; charset=iso-8859-1'
            ];
    

        mail($to,$subject,$message,$headers);
        // mail($to,$subject,$body,$subject,$message,$headers);
        $message_sent = true;
            
        }
            
            
      
            
            
            

            // while($row_total = $service_price_result->fetch_assoc()) {
            //     $price = $row_total['service_price'];


            // while($row_total = $service_price_result->fetch_assoc()) {
            //     $service_price = $row_total['service_price'];

        $customer_appointment_insert = "INSERT INTO appointments (name, phone, email, event_day, event_date, services_title,  service_price, stylist_name, time_available, messages) VALUES ('$name', '$phone', '$email', '$event_day', '$event_date', '$service_title', '$price', '$stylist_name', '$time_available', '$messages')";

        $result = mysqli_query($conn, $customer_appointment_insert);
            // }
        }
    }

}
    // foreach($_POST['service_price'] as $service) {
    //     $customer_appointment_insert = "INSERT INTO appointments (name, phone, email, event_day, event_date, services_title,  service_price, stylist_name, time_available, messages) VALUES ('$name', '$phone', '$email', '$event_day', '$event_date', '$service_title', '$service', '$stylist_name', '$time_available', '$messages')";

    //     $result = mysqli_query($conn, $customer_appointment_insert);
    // }

        // print_r($result);

        ////////////// SEND EMAIL TO R AND L BARBERSHOP TO CONFIRM APPOINTMENT
        $message_sent = false;


        // if(isset($_POST['customer_email']) && $_POST['customer_email'] !="") {
        // if(filter_var($_POST['customer_email'], FILTER_VALIDATE_EMAIL)){


        //         // submit the form

        $event_date = filter_var($_POST['event_date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $event_day = filter_var($_POST['event_day'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $time_available = filter_var($_POST['select-stylist-avail-time'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $services_title = filter_var($_POST['services_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $stylist_name = filter_var($_POST['stylist_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // $customer_last_name = filter_var($_POST['customer_last_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $customer_phone_number = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        // $services_description = filter_var($_POST['services_description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


        
        // }
        // else {
        //     $invalid_class_name = "form-invalid";
        // }
        // }

        // if ($stylist == Null || '') {
        //   $_SESSION['stylist-name-empty'] = "Please Choose a Technician";';
        // }
       
        

          // }


        // Good one works
        if($result > 0){
            $_SESSION['status'] = "Appointment Made Successfully!";
            header("location: index.php");
        } else {
            $_SESSION['status'] = "Appointment Not Made Please Try Again!";
            header("location: book_appointment_4.php");
        }


//   header('Location: book_appointment_4.php');
//   exit;
} 
  