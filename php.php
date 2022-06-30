<?php
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '100',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: c77f3b2f-c6e5-4845-81ad-34fd6d637ff6'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
// print_r(json_decode($response)); // print json decoded response
// echo $response;
echo "<table border='1'>";
$MyData = json_decode($response, TRUE);
for($i = 0; $i < 25; $i++){
  echo"<tr>";
echo "<th> Name </th>";
$MyNewData = $MyData['data'][$i];
echo "<td>".($MyNewData['name'])."</td>";
echo "<th> Price </th>";
echo "<td>".($MyNewData['quote']["USD"]["price"]."<br/>")."</td>";
echo"</tr>";

}
echo "</table>";
// var_dump($MyData->quote->USD->price);
curl_close($curl); // Close request
?>

