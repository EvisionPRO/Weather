<?php


    $error = "";
    $successMessage = "";

    if ($_POST) {
        
        
        if (!$_POST['email']) {
            
            $error .= "An email address is requaired. <br />";
            
        }
        
        if (!$_POST['subject']) {
            
            $error .= "The subject field is requaired. <br />";
            
        }
        
        
        if (!$_POST['textarea']) {
            
            $error .= "The textarea field is requaired. <br />";
            
        }
        
        if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {    
            $error .= "The email addreess is not valid. <br />";
        }
        
        if ($error != "") {
            
           $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br />'. $error . '<p>Change a few things up and try submitting again.</p></div>';
        } else {
                    
            $emailTo = "jaroslaw.sliz@gmail.com";
            $subject = $_POST['subject'];
            $textarea = $_POST['textarea'];
            $headers = "From". $_POST['email'];

            if (mail($emailTo, $subject, $textarea, $headers)) {

                $successMessage = '<div class="alert alert-success" role="alert">Your meassage was sent, we will get back to you ASAP</div>';

            } else {
                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be send. Please try again later</div>';
                
            }

        }
        
    }


?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">


    <!-- jQuery -->

    <script   src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>

    <style type="text/css">

        .container {
            margin-top: 45px;
        }

    

    </style>


    <body>



        <div class="container">
            <h1>Get in touch!</h1>

           
            
            <div id="error"><? echo $error.$successMessage ?></div>
            

                    <!-- Form -->


            <form method="post">
              <fieldset class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                <small class="content">What would you like to ask us?</small>
              </fieldset>
              <fieldset class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject">
              </fieldset>


              <fieldset class="form-group">
                <label for="textarea">What would yo ulike to ask us?</label>
                <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>
              </fieldset>



              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>



        <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
        
        
        <script type="text/javascript">
        
            
            $("form").submit(function (e) {
                
                var error = "";
                
                if ($("#email").val() == "") {
                    
                    error += "The emails field is required.<br />";
                }
                
                if ($("#subject").val() == "") {
                    
                    error += "The subject field is required.<br />";
                }
                
                if ($("#textarea").val() == "") {
                    
                    error += "The content field is required.<br />";
                }
                
                if (error != "") {
                
                $("#error").html('<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br />' + error + '<p>Change a few things up and try submitting again.</p></div>');
                    
                    return = false;
                    
                } else {
                 
                    return = true;
                }
                    
                
            });
        
        
        </script>
        
        
        
        
        
        
        
        
        
  </body>
</html>
