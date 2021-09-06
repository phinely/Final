<?php



class Routeur{
 
 private $request;
 private $routes  = [   " "=> "home",
                        "macBolan"=>"macBolan",
                        "portfolio"=>"portfolio",
                        "index"   => "home",
                        "terrains" => "lands",
                        "engins" => "EL",
                        "AboutUs"=> "about",
                        "Bc" => "btp",
                        'forages' => "forages",
                        'video' =>"vidsur",
                        "maisons" =>"maisons",
                        "apparts" =>"apparts",
                        "hotels" => "hotels",
                        "cars-lux"=>"Voitures"
                    
                    ];


    public function __construct ($request){
        $this->request = $request;
    }

    public function renderController(){
        $request = $this->request;

       if(key_exists($request,$this->routes))
       {
                $controller = $this->routes[$request];
                include (CONTROLLER.$controller.'.php');
       }
       else{
           echo '<h3>Cette page n\'est pas disponible</h3>';
       }
    }


}