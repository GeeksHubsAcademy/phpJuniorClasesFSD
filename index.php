<?php 

    class Personaje {

        function __construct($nombre){
            $this->nombre = $nombre;
        }

        public $vida = 200;
        public $ataque = 20;
        public $defensa = 10;
        public $weapons = [
            "weapon1" => "katana",
            "weapon2" => "guitarra",
            "weapon3" => "ak47"
        ];
        public $magic = [
            "1" => [
                "action" => "heal",
                "value" => 50 
            ],
            "2" => [
                "action" => "poisoning",
                "value" => -20
            ]
        ];

        //Métodos

        public function atacar($enemigo){
            $enemigo->vida = $enemigo->vida - $this->ataque;
            echo "Hemos atacado y dañamos '".$this->ataque."' puntos de vida, ahora la vida de 
            $enemigo->nombre es $enemigo->vida";
           
        }

        public function throwSpell(){

            echo "Lanzamos un hechizo de tipo '".$this->magic["1"]["action"]."' y curamos 
            '".$this->magic["1"]["value"]."' de vida";
        }


    };

    $p1 = new Personaje('Pepe');
    $p2 = new Personaje('Armando');

    $p1->atacar($p2);

?>