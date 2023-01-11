<?php
class Ecommerce{
    public $listaProdotti = [];

    public function aggiungiProdotto(&$_prodotto){
        $listaProdotti = $_prodotto;
    }

    public function compraProdotto(&$_utente, &$_prodotto){
        if($_utente->dataCarta > date("Y/m/d")){
            if($utente->registrato){
                $_prodotto->costo = ($_prodotto->costo/100) * 80;
            }
            if (in_array($_prodotto, $listaProdotti)){
                unset($listaProdotti[array_search($_prodotto,$listaProdotti)]);
            }
        }
    }
}
abstract class Prodotto{
    public $nome;
    public $costo;
    public $tipoProdotto;
}

class Cibo extends Prodotto{
    public $dataScadenza;
    
    function __construct($_nome, $_costo, $_dataScadenza){
        $this->nome = $_nome;
        $this->costo = $_costo;
        $this->tipoProdotto = 'cibo';
        $this->dataScadenza = $_dataScadenza;
    }
}

class Giochi extends Prodotto{
    public $tipoGioco;

    function __construct($_nome, $_costo, $_tipoGioco){
        $this->nome = $_nome;
        $this->costo = $_costo;
        $this->tipoProdotto = 'giochi';
        $this->tipoGioco = $_tipoGioco;
    }
}

class Cucce extends Prodotto{
    public $grandezza;

    function __construct($_nome, $_costo, $_grandezza){
        $this->nome = $_nome;
        $this->costo = $_costo;
        $this->tipoProdotto = 'cucce';
        $this->grandezza = $_grandezza;
    }
}

class Utente{
    public $registrato;
    public $dataCarta;

    function __construct($_registrato, $_dataCarta){
        $this->registrato = $_registrato;
        $this->dataCarta = $_dataCarta;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    
</body>
</html>