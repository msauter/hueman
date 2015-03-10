<?php 
ob_start();
$light = $_POST["light"];
$light_id = substr($light, -1);
echo "<p>Value of light request: $light</p>";
if (0 === strpos($light, 'on')) {
    //Turn light on
    $data = array("on"=>true, "sat"=>44, "bri"=>255,"hue"=>33848);
} elseif (0 === strpos($light, 'off')) {
    //Turn light off
    $data = array('on'=>false);
}
else {
    //Do nothing
    $data = array();
}
$data_json = json_encode($data);
//Create curl resource 
$ch = curl_init(); 
//Set url 
curl_setopt($ch, CURLOPT_URL, "http://10.0.1.8/api/newdeveloper/lights/$light_id/state"); 
//Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
//Set request type
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//Set body data
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
//Set to false to output value of response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); 
//$output contains the output string 
$output = curl_exec($ch); 
//Close curl resource to free up system resources 
curl_close($ch);
while (ob_get_status()) 
{
        ob_end_clean();
}
header("Location: /",TRUE,303);
?>
