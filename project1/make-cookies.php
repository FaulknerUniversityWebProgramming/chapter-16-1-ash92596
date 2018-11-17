<?php


    if( isset($_POST['theme']) )
    {
        // add 1 day to the current time for expiry time
        $expiryTime = time()+60*60*24;
        // create a persistent cookie
        $themeName = "Theme";
        $themeValue = $_POST['theme'];
      
        setcookie($themeName, $themeValue, $expiryTime);
        
        header("Location: chapter16-project1.php");
    }

  if( isset($_POST['philosopher']) )
    {
        // add 1 day to the current time for expiry time
        $expiryTime = 0;
        // create a session cookie
        $philosopherName = "Philosopher";
        $philosopherValue = $_POST['philosopher'];
    
        setcookie($philosopherName, $philosopherValue, $expiryTime);
        
        header("Location: chapter16-project1.php");
    }

?>
