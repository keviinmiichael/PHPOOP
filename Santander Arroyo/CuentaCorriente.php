<?php

class CuentaCorriente extends Cuenta{


    public function depositarCheque($cheque)
    {
        parent::depositar($cheque->informarMonto());
    }




}
