<?php 
$chaine = "contact@gmail.com athakim@athakim.fr";

 /*** preg_match ***/


// if(preg_match('/\s*([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9-_]+)[\.]{1}([a-zA-Z]{2,4})\s*/i', $chaine,$matches,PREG_OFFSET_CAPTURE))
// {
//      echo 'vrai <pre>';
//      var_dump($matches);

//      echo '</pre>';
// }else

// {
//      echo 'faux';
// }

 /*** preg_match_all ***/

// if(preg_match_all('/\s*([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9-_]+)[\.]{1}([a-zA-Z]{2,4})\s*/i', $chaine, $matches))
// {
//      echo 'vrai <pre>';
//      var_dump($matches);

//      echo '</pre>';
// }else

// {
//      echo 'faux';
// }



 /*** preg_replace ***/


 // echo preg_replace('/\s*([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9-_]+)[\.]{1}([a-zA-Z]{2,4})\s*/i', '$2.$3@$1 --- ', $chaine,-1,$count);
 // echo $count;

 /*** preg_replace_callback ***/
 // php < 5.3
// echo preg_replace_callback('/\s*([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9-_]+)[\.]{1}([a-zA-Z]{2,4})\s*/i', "myfunc", $chaine);

// function myfunc($matches){
//      $email = 'votre pseudo est :'.$matches[1].' et votre domaine : '.$matches[2];
//      return  $email;
// }
// echo '<br>';
// php >=5.3 
// echo preg_replace_callback('/\s*([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9-_]+)[\.]{1}([a-zA-Z]{2,4})\s*/i',function ($matches){
//      $email = 'votre pseudo est :'.$matches[1].' et votre domaine : '.$matches[2];
//      return  $email;
// }
// , $chaine);


$text  =  "Aenean sagittis sem vel diam , *athakim@athakim.fr* consectetur, et pharetra turpis convallis. Integer , commodo volutpat quam nec molestie. Fusce blandit, massa eget neque cursus hendrerit. Donec lobortis convallis ,enim at laoreet. Donec laoreet neque erat, in venenatis lacus viverra id. " ; 

// $email  =  "*athakim@athakim.fr*" ; 

// echo preg_replace('/'.preg_quote($email).'/',"<a href='mailto:".$email."'>".$email."</a>",$text);


// echo $text;


$result = preg_split('/[,\.]/', $text);

echo '<pre>';
var_dump($result);
echo '</pre>';











?>