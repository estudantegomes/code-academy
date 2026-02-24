<?php
/*
Exercício 3
Considere um relógio que marca horas e minutos. Coube-lhe a tarefa de fornecer informações para
uma interface gráfica de um relógio analógico. Disponha de métodos que retornem a posição de cada
ponteiro do relógio, em graus. Considere doze horas como a posição inicial, ou seja, 0º. Não julgue a
resolução como correta sem comparar o resultado com um relógio real.
*/

class Relogio {
    private $horas, $minutos;

    public function __construct(int $horas, int $minutos){
        $this->horas = $horas;
        $this->minutos = $minutos;
    }

    public function horasEmGraus(): float {
        return (($this->horas%12) + ($this->minutos/60))*30;
    }

    public function minutosEmGraus():float {
        return $this->minutos * 6;
    }

}

$r1 = new Relogio(13,56);
echo $r1->horasEmGraus()."\n";
echo $r1->minutosEmGraus()."\n";

?>