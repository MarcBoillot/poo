<?php 

trait bipede {
    public function courir(){
        echo "je cours";
    }
}
interface Mammifere{
    public function pilosite();
}
abstract class Humain implements Mammifere{
    use bipede;
    public static $population = 0;
    public int $force = 1;
    private string $secret;
    public string $nom;
    public string $nomDeFamille;
    public int $taille = 175;
    public bool $isAlive = true;
    const NOMBRE_DE_PIEDS = 2;

    public function __construct($nomDeFamille){ 
        echo "je suis né";
        $this->nom = $nomDeFamille;
        self::$population++;   
    }
    public function __destruct(){
        if($isAlive = false){
        self::$population--;
        echo "je suis mort"; 
        }
    }
    public function pilosite(){
        echo "je suis poilu";
    }
    public function setSecret(string $secret):void{
        $this->secret = $secret;
     }

    public function getSecret():string{
        return $this->secret;
    }

    public function kill(){
        $this->isAlive = false;
    }
    public function marcher(){
        echo "je sais marcher sur mes deux pieds";
    }
    public function grandir(){
        $this->taille = $this->taille+10;
    }

  
}
class Femme extends Humain{
    public function faireEnfant(){
        echo "oui je peux enfanter";
    }
    public function pilosite(){
        echo "je suis moins poilu qu'un homme";
    }
}
class Homme extends Humain{
    public int $force = 2;
    public function pilosite(){
        echo "je suis poilu";
    }
}
$marcelline = new Femme ("Marcelline");
echo "population" . Humain::$population . PHP_EOL;
$constance = new Femme ("Constance");
echo "population" . Humain::$population . PHP_EOL;
$Adam = new Homme("Adamae");
echo "population" . Humain::$population . PHP_EOL;
var_dump($marcelline->courir());
$Adam->marcher();
$marcelline->marcher();
$marcelline->faireEnfant();
$marcelline->grandir();
$marcelline->setSecret("j'ai tué Constance");
$marcelline->getSecret();
var_dump($marcelline);
var_dump($constance);
var_dump($Adam);
var_dump($Adam->pilosite());