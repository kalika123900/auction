<?php
  
  // header('Content-type: image/jpeg');
  
  // $jpg_image = imagecreatefromjpeg('assets/images/cert_blueprint.jpg');

  // //$white = imagecolorallocate($jpg_image, 255, 255, 255);

  // // Set Path to Font File
  // $font_path = 'assets/font/AlexBrush-Regular.ttf';

  // // Set Text to Be Printed On Image
  // $text = "This is a sunset!";

  // // Print Text On Image
  // imagettftext($jpg_image, 180, 0, 1100, 1250, $white, $font_path, $text);

  // $text = "Excel Mastering";

  // // Print Text On Image
  // imagettftext($jpg_image, 120, 0, 1250, 1650, $white, $font_path, $text);

  // // Send Image to Browser
  // imagejpeg($jpg_image);

  // // Clear Memory
  // imagedestroy($jpg_image);


        //Data, connection, auth
     
        $soapUrl = "https://cdx.dealerbuilt.com/0.99a/Api.svc"; // asmx URL of WSDL
        $soapUser = "busintell01";  //  username
        $soapPassword = "EAJ?t;h)STFwZ;csA&"; // password

        // xml post structure

        $xml_post_string = '<soapenv:Envelope xmlns:arr="http://schemas.microsoft.com/2003/10/Serialization/Arrays" xmlns:ns="http://cdx.dealerbuilt.com/Api/0.99/" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
                              <soapenv:Header>
                                <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                                  <wsse:UsernameToken wsu:Id="UsernameToken-29" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                                    <wsse:Username>busintell01</wsse:Username>
                                    <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">EAJ?t;h)STFwZ;csA&</wsse:Password>
                                    <wsu:Created>'.date('Y-m-dTh:i:s').'</wsu:Created>
                                  </wsse:UsernameToken>
                                </wsse:Security>
                              </soapenv:Header>

                              <soapenv:Body>
                               <CustomerSearchCriteria xmlns:i="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://schemas.datacontract.org/2004/07/DealerBuilt.BaseApi">
                                  <ChangedPeriodEnd>2020-07-10T13:04:13.9624341Z</ChangedPeriodEnd>
                                  <ChangedPeriodStart>2019-07-10T13:04:13.9624341Z</ChangedPeriodStart>
                                  <MaxElapsedSinceUpdate>PT0.1234567S</MaxElapsedSinceUpdate>
                                  <SuppressErrors>true</SuppressErrors>
                                  <SourceIds xmlns:d2p1="http://schemas.microsoft.com/2003/10/Serialization/Arrays">
                                    <d2p1:long>100</d2p1:long>
                                    </SourceIds>
                                    <ActivityServiceIds xmlns:d2p1="http://schemas.microsoft.com/2003/10/Serialization/Arrays">
                                    <d2p1:long></d2p1:long>
                                    <d2p1:long></d2p1:long>
                                  </ActivityServiceIds>
                                  <PartialName>john</PartialName>
                                </CustomerSearchCriteria>
                            </soapenv:Envelope>';   // data from the form, e.g. some ID number

           $headers = array(
                        "Content-type: text/xml;charset=\"utf-8\"",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",
                        "Host: cdx.dealerbuilt.com:443",
                        "SOAPAction: http://cdx.dealerbuilt.com/Api/0.99/PullCustomers", 
                        "Content-length: ".strlen($xml_post_string),
                    ); //SOAPAction: your op URL

            $url = $soapUrl;

            // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            // converting
            $response = curl_exec($ch); 
            curl_close($ch);
            var_dump($ch);
            print_r(curl_error($ch));
            print_r(var_dump($response));
            // converting
            $response1 = str_replace("<soap:Body>","",$response);
            $response2 = str_replace("</soap:Body>","",$response1);

            // convertingc to XML
            $parser = simplexml_load_string($response2);
            // user $parser to get your data out of XML response and to display it.

  
?>