<?php

 class Counter{
    private $counter;

       public function count(){
      $this->counter = (file_exists("visits_file")?file_get_contents("visits_file"):0);
        $file = fopen("visits_file" , "w+");
        fwrite($file , $this->visitors());
        echo "num of visitors is $this->counter" ;
      
        fclose($file);
    
    }
    
    private function visitors(){
   
        if(!isset($_SESSION["is_visited"]) ){
          $this->counter++;
          
          $_SESSION["is_visited"]=true ;
          
       }
         return $this->counter;
        }
}

?>