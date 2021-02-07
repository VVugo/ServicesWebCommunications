<?php
if (isset($_POST['recherche']) && $_POST['recherche']!="") {
 $recherche = $_POST['recherche'];
 $url = __DIR__"/Api/ContactReader.php?".$recherche;
 
 $contact = curl_init($url);
 curl_setopt($contact,CURLOPT_RETURNTRANSFER,true);
 $data = curl_exec($contact);
 
 $data = json_decode($data);
 
 echo "<table>";
 echo "<tr><td>Order ID:</td><td>$data->recherche</td></tr>";
 echo "<tr><td>Amount:</td><td>$data->amount</td></tr>";
 echo "<tr><td>Response Code:</td><td>$data->response_code</td></tr>";
 echo "<tr><td>Response Desc:</td><td>$data->response_desc</td></tr>";
 echo "</table>";
}
    ?>