<?php

function Create_order_shipstation($ordernumber, $customer_name, $email, $addres1,$addres2, $city , $state, $zip) {
// echo "entro en la funcion";
    $curl = curl_init();
    $today=date('yy/m/d');
//$ordernumber="113-2417504-3046645";
//$customer_name="Jordan Coon";
//$email='jordancoon57@gmail.com';
//$addres1='14531 S Triton Quest Way';
//$city='Draper';
//$state='UT';
//$zip='84020';
// echo $ordernumber;
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://ssapi.shipstation.com/orders/createorder",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n  \"orderNumber\": \"$ordernumber\",\n  
    \"orderKey\": \"$ordernumber\",\n
      \"orderDate\": \"$today\",\n
            \"orderStatus\": \"awaiting_shipment\",\n
                \"customerUsername\": \"$customer_name\",\n
                  \"customerEmail\": \"$email\",\n
                    \"billTo\": {\n
                        \"name\": \"$customer_name\",\n
                        \"company\": null,\n
                            \"street1\": null,\n
                            \"street2\": null,\n 
                               \"street3\": null,\n 
                                  \"city\": null,\n    \"state\": null,\n
                                      \"postalCode\": null,\n
                                          \"country\": null,\n
                                              \"phone\": null,\n
                                                  \"residential\": null\n
                                                    },\n 
                                                     \"shipTo\": {\n
                                                        \"name\": \"$customer_name\",\n
                                                    \"street1\": \"$addres1\",\n
                                                        \"street2\":\"$addres2\",\n
                                                            \"street3\": null,\n
                                                                \"city\": \"$city\",\n
                                                                    \"state\": \"$state\",\n 
                                                                       \"postalCode\": \"$zip\",\n
                                                                           \"country\": \"US\",\n
                                                                           \"residential\": true\n
                                                                             },\n
                                                                               \"items\": [\n
                                                                                   {\n
                                                                                    \"sku\": \"SHUT-14\",\n
                                                                                          \"name\": \"TRAVEL-SIZED Shut Eye - 14 Count\",\n
                                                                                                \"imageUrl\": null,\n
                                                                                                      \"weight\": {\n
                                                                                                              \"value\": 1,\n
                                                                                                                      \"units\": \"ounces\"\n
                                                                                                                            },\n
                                                                                                                                  \"quantity\": 1,\n
                                                                                                                                        \"unitPrice\": 0.00,\n
                                                                                                                                         \"productId\": 57673770,\n
                                                                                                                                               \"fulfillmentSku\": null,\n
                                                                                                                                                     \"adjustment\": false,\n
                                                                                                                                                               },\n],\n
                                                                                                                                                                \"amountPaid\": 0.00,\n
                                                                                                                                                                  \"taxAmount\": 0,\n
                                                                                                                                                                    \"shippingAmount\": 0,\n
                                                                                                                                                                                  \"carrierCode\": \"stamps_com\",\n
                                                                                                                                                                                    \"serviceCode\": \"usps_first_class_mail\",\n
                                                                                                                                                                                      \"packageCode\": \"package\",\n
                                                                                                                                                                                        \"confirmation\": \"none\",\n
                                                                                                                                                                                            \"weight\": {\n
                                                                                                                                                                                                \"value\": 1,\n
                                                                                                                                                                                                    \"units\": \"ounces\"\n
                                                                                                                                                                                                      },\n  \"dimensions\": {\n 
                                                                                                                                                                                                         \"units\": \"inches\",\n
                                                                                                                                                                                                             \"length\": 0,\n
                                                                                                                                                                                                                 \"width\": 0,\n
                                                                                                                                                                                                                     \"height\": 0\n
                                                                                                                                                                                                                       },\n
                                                                                                                                                                                                                         \"insuranceOptions\": {\n
                                                                                                                                                                                                                             \"provider\": \"carrier\",\n
                                                                                                                                                                                                                                 \"insureShipment\": true,\n
                                                                                                                                                                                                                                     \"insuredValue\": 0\n
                                                                                                                                                                                                                                       },\n  \"internationalOptions\": {\n
                                                                                                                                                                                                                                           \"contents\": null,\n 
                                                                                                                                                                                                                                              \"customsItems\": null\n
                                                                                                                                                                                                                                                },\n
                                                                                                                                                                                                                                                    },\n  \"tagIds\": [\n
                                                                                                                                                                                                                                                                                                                                                                                                                                  53974\n  ]\n}",
        CURLOPT_HTTPHEADER => array(
            "Host: ssapi.shipstation.com",
//            "Authorization: Basic ZDVmY2EyYjhmNTI5NDA2ZjhlZmIzMjgyMjU5ZTU4YjY6N2NiMTkxNmJiYTg3NGQxMDliNjc5Njk0MGM1MTU2ZTg=",  //anteriores
            "Authorization: Basic YTA1YTc3ZjA2MTNkNDc2NTkwNGE5ZDZkN2M1NjlkMjY6Njk2YTcxYmUyYWM0NDk4OWIwZjgyYmJmZThkZTE1ZGI=",  //ariel
            "Content-Type: application/json"
        ),
    ));

    $response = curl_exec($curl);
// echo $response;
    $json = json_decode($response, true);
    $claimed1=$json['orderId'];
    curl_close($curl);

//    echo $claimed1;//int
    $claimed=strval($claimed1);
//    echo gettype($claimed);

//    $servername = "127.0.0.1";
//    $username = "marvinvi_wp11";
//    $password = "919293marvin";
//    $dbname = "marvinvi_gobiotix_test";
    $servername = "127.0.0.1";
    $username = "marvinvi";
    $password = "W,s-7QkkfoX-";
    $dbname = "marvinvi_freenuvanaionos";

    /* VERIFICACION  */
//    if($verfication==30  ){
//        $_SESSION["verificationgo"]=0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind prepared statements
//        $stmt = $conn->prepare("INSERT INTO gobiotix (Product, OrderNumber,Rating,Review,Email,First_Name,Last_Name,Shipping1,Shipping2,City,St,Zip,Status)
//          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
//        $stmt->bind_param("sssssssssssii", $product, $order, $rating , $review ,$email,$fname,$lname,$saddress1,$saddress2,$city,$state,$zip,$status);
//        $stmt->execute();
//        $fecha =date('Y-m-d');
    // $stmt2 = $conn->prepare("UPDATE gobiotix SET order_shi_id=? WHERE OrderNumber=?");
    // $stmt2->bind_param("ss", $claimed,$ordernumber);
    // $stmt2->execute();
//        $stmt->close();
    // $stmt2->close();
    $conn->close();
}
//echo $response;


