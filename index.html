<?php

        $weather = "";
    $error = "";
    
    if ($_GET['city']) {
        
        $city = str_replace(' ', '', $_GET['city']);
        
        $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        
        
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    
            $error = "That city could not be found.";

        } else {
        
        $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        
        $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
            
        if (sizeof($pageArray) > 1) {
        
                $secondPageArray = explode('</span></span></span>', $pageArray[1]);
            
                if (sizeof($secondPageArray) > 1) {

                    $weather = $secondPageArray[0];
                    
                } else {
                    
                    $error = "That city could not be found.";
                    
                }
            
            } else {
            
                $error = "That city could not be found.";
            
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
    
    <title>Weather Forecast</title>
    
    <style type="text/css">
    
        
        
        html { 
          background: url(snow.jpeg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
        
        #main {
            margin-top: 205px;
        }
        
        h1 {
            font-size: 3em;
        }
        
        h3 {
            font-size: 1.5em;
            color: #5c5c5c;
            margin-bottom: 25px;
        }
        
        #city {
            width: 450px;
            margin-right: 5px;
            border-radius: 3px;
        }
        
        body {
            background: none;
            font-family: sans-serif;
            color: #ddd;
            text-align: center;

        }
        
        #weather {
            width: 550px;
            margin: 0 auto;
            margin-top: 30px;
            opacity: 0.87;
        }
    
    </style>
    
</head>

<body>
    
    <div class="container" id="main">    
        <h1>What's The Weather?</h1>
        <h3>Enter the name of a city</h3>
    
    
    
   
    
    <div>
    
        <form class="form-inline">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Kansas City">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>
        
        <div id="weather"><?php 
              
              if ($weather) {
                  
                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';
                  
              } else if ($error) {
                  
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                  
              }
              
              ?></div>
    
    </div>
    
    
    
    
    

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    
    <script>
        
    
    </script>

</body>


</html>