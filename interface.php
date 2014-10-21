<?php 
/**
        * interface.php accepts a GET or POST variable task via AJAX that selectes the correct
        * process to perform.
        * 
        * @param task string 1 = timetable | 2 = collegenews | 3 = QR code | 4 = important dates | 5 = week countdown.
        * @return string html5 content relevant to the task.
        * 
        * @author Stephen Smith
 */



$option = validOption('task'); // strip the task selection from the URL


if($option) {
    // If the task option was present
    
    switch ($option) { // Create the appropriate obj and output
        
        // Room timetable
        case 1: 
            require_once('classes/timetable.php');
            $process = new Timetable();
        break;

        // College news
        case 2:
            require_once('classes/collegenews.php');
            $process = new CollegeNews();
        break;

        // Update the QR Code string
        case 3:
            require_once('classes/qrcode.php');
            $process = new QRCode();
        break;

        // The important dates list
        case 4:
            require_once('classes/importantdates.php');
            $process = new ImportantDates();
        break;

        // The weekly countdown string
        case 5:
            require_once('classes/countdown.php');
            $process = new Countdown();
        break;

        // An inapropriate value was sent to the script send back an error
        default :
            require_once('classes/display.php');
            $process = new Display();
            $process->setOutput('<p>Unknown Task Requested</p>');
        break;
        
    }
    // Call the generateOutput mathod to output the resulting data.
    // Note need to add a mac address parameter to allow identification of multiple devices
    $process->generateOutput();
}

    /**
       * Checks GET and POST arrays for the presence of the required parameter and 
       * results its value.
       * @param parameter string of name of the index to search for in the arrays.
       * @return string the parameter value.
       */
    function validOption($parameter){
      
        
        if (isset($_POST[$parameter])) {
            $param = $_POST[$parameter];
        } else if (isset($_GET[$parameter])) {
            $param = $_GET[$parameter];
        } else {
            return null;
        }
    
        return $param;
        
    }



?>