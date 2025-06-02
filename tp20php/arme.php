
<?php
//mysql user : JeuArcade 
//mdp: eOY9ZPyq_@vbBs[G

class Arme {
    public $id;
    public $nom;
    public $image;
    public $description;
    public $type;

    public function __construct() {
        $num_args = func_num_args();
        switch ($num_args)
        {
            case '0' :
                
                break;
            case '4' :
                $this->nom = func_get_arg(0);
                $this->image = func_get_arg(1);
                $this->description = func_get_arg(2);
                $this->type = func_get_arg(3);
                break;
            case '5':
                $this->id = func_get_arg(0);
                $this->nom = func_get_arg(1);
                $this->image = func_get_arg(2);
                $this->description = func_get_arg(3);
                $this->type = func_get_arg(4);
                break;
        }


    }
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getType() {
        return $this->type;
    }

    public function toString() {
        $contenueObjet =$this->id."\n";
        $contenueObjet .= $this->nom."\n";
        $contenueObjet .= $this->image."\n";
        $contenueObjet .= $this->description."\n";
        $contenueObjet .= $this->type."\n";
        return $contenueObjet;
    }

    //Modificateur

    public function set_id($id) {
        $this->id =$id;
    }

    public function set_nom($nom) {
        $this->nom =$nom;
    }

    public function set_image($image) {
        $this->image =$image;
    }

    public function set_description($description) {
        $this->description =$description;
    }

    public function set_type($type) {
        $this->type =$type;
    }


}