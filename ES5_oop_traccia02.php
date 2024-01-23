<?php
class Vertebrate {
  
    public function __construct(){
        $this->nameVertebrate
    }

    protected function presentationVertebrate (){
        echo "Sono un animale vertebrato\n";
    }
}


class WarmBlooded extends Vertebrate {
        public function __construct(){
        parent::__construct();
        echo $this->getWarmBlooded();
        }

        protected function getWarmBlooded (){
        return "Sono un animale a sangue caldo\n";
        }

 }

    class ColdBlooded extends Vertebrate {
        public function __construct(){
            parent::__construct();
            echo "Sono un animale a sangue freddo\n";
           
    
        }
    }

class Mammal extends WarmBlooded {

    public function __construct(){
        parent::__construct();
        echo $this->verso;

    }

      protected function getMammal (){
       return "Aaarg! \n" ;
    }
} 

class Bird extends WarmBlooded {
    public function __construct($_vertebrate, $_warmBlooded, $_bird){
        parent::__construct($_vertebrate, $_warmBlooded);
        
        $this->nameBird= $_bird;

}

}

class ColdBlooded extends Vertebrate {
    public function __construct(){
        parent::__construct();
        
        $this->nameColdBlooded

}
}

class Fish extends ColdBlooded {

    public function __construct($_vertebrate, $_coldBlooded, $_fish){
        parent::__construct($_vertebrate, $_coldBlooded);
        
        $this->nameFisch= $_fish;

}

protected function getPresentation (){

    echo "Sono un animale " . $this->nameVertebrate . " \n" . "Sono un animale a " . $this-> name;
}

}

class Reptile extends ColdBlooded {

    public function __construct($_vertebrate, $_coldBlooded, $_reptile){
        parent::__construct($_vertebrate, $_coldBlooded);
        
        $this->nameReptiles= $_reptile;

}
}

class Amphibians extends ColdBlooded {

    public function __construct($_vertebrate, $_coldBlooded, $_amphibians){
        parent::__construct($_vertebrate, $_coldBlooded);
        
        $this->nameAmhibians= $_amphibians;

}
}
