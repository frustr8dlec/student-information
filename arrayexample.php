<?php
/**
 * A basic PHP array examples for demo purposes.
 */

$sampleArray = array();

$sampleArray = array(
    'Name'=>'Stephen', 
    'Room'=>'B108', 
    'Phone'=>'01522876357', 
    'Address'=>array(
        'Street'=>'Monks Road',
        'Town'=>'Lincoln',
        'Postcode'=>'LN25HQ'
    )
);

$output = '';
$output .= p($sampleArray['Name'] . " " . $sampleArray['Phone']);
$output .= p($sampleArray['Address']['Town'], 'Address', 'Town');

foreach($sampleArray['Address'] as $key=>$addressLine)
    $output .= p($key . ':' . $addressLine);

function p($content, $id=NULL, $class=NULL){
    return '<p' . params($id,$class) . '>' . $content . '</p>';
}

function params($id=NULL, $class=NULL){     
    return ($id ? ' id="' . $id . '"' : '' ) . ($class ? ' class="' . $class . '"' : '' );
}

?>
<html>
    <head>
        <title>Simple Examples of Arrays</title>
    </head>
    <body>
        <?php print $output; ?>
    </body>
</html>