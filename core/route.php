<?PHP
class Route{

    function __construct($url){
        echo $url;
        $clean_url=rtrim($url,'/');
        echo $clean_url;
       //echo $clean_url.$length;

        $clean_url=explode('/',$clean_url);
        echo count($clean_url);


        $rquestedController=$clean_url[0]."Controller";

        include("app/controllers/".$rquestedController.".php");
       // echo $clean_url[1];
       $fun=isset($clean_url[1])?$clean_url[1]:"main";
      new $rquestedController($fun);
    //   $func;
    //    if(count($clean_url)==1){
    //     $q->main(); 

    //    }
    //     if(count($clean_url)==2){
    //         $func=$clean_url[1];
    //         print_r($clean_url);
    //         echo $func;
    //         $q->$func(); 
    //     }
    //     if(count($clean_url)==3){
    //         $func=$clean_url[2];
    //         print_r($clean_url);
    //         echo $func;
    //         $q->$func(); 
    //     }
        // if(count($clean_url)==3){
        //     $func=$clean_url[1];

        //     $q-> $func($clean_url[2]); 
        // }
       // echo $func;
       // $q->$func();
       // $q->$clean_url[1]();

   




        








    }



}
?>