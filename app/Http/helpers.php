<?php
// My common functions
function uploadFile($path,$existing_file=null,$new_file){
   if (!file_exists($path)) {
      mkdir($path, 0777, true);
   }
   if(isset($existing_file) && file_exists($path.'/'.$existing_file)){
      unlink($path.'/'.$existing_file);
   }
   $name = str_random(3).'_image_'.date('ymdhsi').'_'.date('d_m_Y').'.png';

   $new_file->move($path,$name);

   return $name;
}

function feedMe($feed) {
    // Use cURL to fetch text
    $useragent = 1;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $feed);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
    $rss = curl_exec($ch);
    curl_close($ch);

    // Manipulate string into object
    $rss = simplexml_load_string($rss);

    return $rss;
}   

    // check similar news feed
    function newsTextCheck($title, $news_array)
    {
        $check = [];
        $simillar_percentage_arr = [];
        $percent = 0;

        foreach ($news_array as $value) {
            $simillar_percentage = similar_text($title, $value->news_title, $percent);
            // dd($simillar_percentage,$percent,$percent > 51);
            if ($percent > 51) $check[] = 1;
            else $check[] = 0;
        }

        if(in_array(1,$check)) return true;
        return false;
    }


?>