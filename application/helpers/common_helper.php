<?php
function getUserMeta($id,$key){

  $CI = get_instance();
  // You may need to load the model if it hasn't been pre-loaded
  $CI->load->model('CMModel');

  // Call a function of the model
 
  $result = $CI->CMModel->fetchData('user_meta',['user_id'=>$id , 'metakey'=>$key]);
  if(count($result)>0)
  {
    return current($result)->metavalue;
  }
  else
  {
    return '';
  }
}
function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
     if (!$dir_handle)
          return false;
     while($file = readdir($dir_handle)) {
           if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                     unlink($dirname."/".$file);
                else
                     delete_directory($dirname.'/'.$file);
           }
     }
     closedir($dir_handle);
     rmdir($dirname);
     return true;
}
function getLocation(){
  
  $temp = array();

  $temp['Ariana']      = ['Ariana Medina', 'Ettadhamen','Kalaat El Andalous','Mnihla','Raoued','Sidi Thabet','oukra'];
  $temp['Béja']        = ['Amdoun','Beja North','Beja South','Goubellat','Mejez El Bab','Nefza','Teboursouk','Testour','Thibar'];
  $temp['Ben Arous']   = ['Ben Arous','Boumhel','El Mourouj','Ezzahra','Fouchana','Hammam Chott','Hammam Lif','M`Hamdia','Medina Jedida','Megrine','Mornag','Rades'];
  $temp['Bizerte']     = ['Bizerte North','Bizerte South','Djoumime','El Alia','Ghar El Melh','Ghezala','Mateur','Menzel Bourguiba','Menzel Jemil','Ras Jebel','Sejenane','Tinja','Utique','Zarzouna'];
  $temp['Gabès']       = ['Gabes Medina','Gabes West','Gabes South','Ghannouch','Hamma','Mareth','Matmata','New Matmata','Menzel Habib','Metouia'];
  $temp['Gafsa']       = ['Belkhir','Gafsa North','Gafsa South','Guetar','Ksar','Mdhilla','Metlaoui','Oum Larais','Redeyef','Sened','Sidi Aich'];
  $temp['Jendouba']    = ['Aïn Draham','Balta','Bousalem','Fernana','Ghardimaou','Jendouba','Jendouba Nord','Oued Mliz','Tabarka'];
  $temp['Kairouan']    = ['Alaa','Bouhajla','Chebika','Chrarda','Haffouz','Hajeb El Ayoun','Kairouan North','Kairouan South','Nasrallah','Oueslatia','Sbikha'];
  $temp['Kasserine']   = ['Ayoun','Ezzouhour','Feriana','Foussana','Hassi El Ferid','Hidra','Jedeliane','Kasserine North','Kasserine South','Majel Belabbes','Sbeitla','Sbiba','Thala'];
  $temp['Kebili']      = ['Douz North','Douz North','Faouar','Kebili North','Kebili South','Souk El Ahed'];
  $temp['Kef']         = ['Dahmani','Es Sers','Jerissa','Kalaa Khasbat','Kalaat Senane','Kef East','Kef West','Ksour','Nebeur' ,'Sakiet Sidi Youssef','Tajerouine'] ;
  $temp['Mahdia']      = ['Boumerdes','Chebba','Chorbane','El Djem','Hbira','Ksour Essef','Mahdia','Melloulech','Ouled Chamekh','Sidi Alouane','Souassi'];
  $temp['Manouba']     = ['Borj El Amri','Douar Hicher','El Battan','Jedaida','Manouba','Mornaguia','Mornaguia Oued Ellil'];
  $temp['Medenine']    = ['Ben Gardane','Beni Khedache','Djerba Ajim','Djerba Midoun','Djerba Houmt Souk','Medenine North','Medenine South','Sidi Makhlouf','Zarzis'];
  $temp['Monastir']    = ['Bekalta','Bembla','Beni Hassen','Jammel','Ksar Hellal','Ksibet El Mediouni','Moknine','Monastir','Ouerdanine','Sahline','Sayada-Lamta-Bou Hjar','Teboulba','Zeramdine'];
  $temp['Nabeul']      = ['Beni Khalled','Beni Khiar','Bou Argoub','Dar Chaabane El Fehri','El Mida','Grombalia','Hammam Ghezaz','Hammamet','Haouaria','Kelibia','Korba','Menzel Bouzelfa','Menzel Temime','Nabeul','Soliman','Takelsa'];
  $temp['Sfax']        = ['Agareb','Bir Ali Ben Khelifa','El Amra','El Ghraiba','Hencha','Jebeniana','Kerkennah','Mahres','Menzel Chaker','Sakiet Eddaier','Sakiet Ezzit','Sfax Medina','Sfax West','Sfax South','Skhira'];
  $temp['Sidi Bouzid'] = ['Bir El Hfay','Jelma','Mazzouna','Meknassi','Menzel Bouzaiene','Ouled Haffouz','Regueb','Sabalat Ouled Asker','Sidi Ali Ben Aoun','Sidi Bouzid East','Sidi Bouzid West','Souk Jedid'];
  $temp['Siliana']     = ['Bargou','Bouarada','El Aroussa','El Krib','Gaafour','Kesra','Makthar','Rouhia','Sidi Bourouis','Siliana North','Siliana South'];
  $temp['Sousse']      = ['Akouda','Bouficha','Enfidha','Hammam Sousse','Hergla','Kalaa Kebira','Kalaa Sghira','Kondar','M`Saken','Sidi Bou Ali','Sidi El Heni','Sousse Jaouhara','Sousse Medina','Sousse Riadh','Sousse Sidi Abdelhamid','Zaouia Ksiba Thrayat'];
  $temp['Tataouine']   = ['Bir Lahmar','Dhiba','Ghomrassen','Remada','Samar','Tataouine North','Tataouine South'];
  $temp['Tozeur']      = ['Degueche (Degache)','Hazoua','Nefta','Tamaghza','Tozeur'];
  $temp['Tunis']       = ['Bab Bhar','Bab Souika','Bardo','Bouhaira','Carthage','El Khadra','El Menzah','El Ouardia','El Tahrir','Ezzouhour','Hrairia','Jebel Jelloud','Kabaria','La Goulette','La Marsa','Le Kram','Medina','Omrane','Omrane Superieur','Sidi El Bechir','Sidi Hassine','Sijoumi'];
  $temp['Zaghouan']    = ['Bir Mchergua','Fahs','Nadhour','Saouaf','Zaghouan','Zriba'];

  return $temp;
}
function generate_certificate($name,$course,$certName)
{
  $jpg_image = imagecreatefromjpeg(IMAGE_PATH.'/cert_blueprint.jpg');

  //$white = imagecolorallocate($jpg_image, 255, 255, 255);

  // Set Path to Font File
  $font_path = 'assets/font/AlexBrush-Regular.ttf';

  // Set Text to Be Printed On Image
  $text = $name;

  // Print Text On Image
  imagettftext($jpg_image, 180, 0, 1100, 1250, 0, $font_path, $text);

  $text = $course;

  // Print Text On Image
  imagettftext($jpg_image, 120, 0, 1250, 1650, 0, $font_path, $text);

  // Send Image to Browser
  imagejpeg($jpg_image,$certName);

  // Clear Memory
  imagedestroy($jpg_image);
}
?>