<?php

class DesarrolloSoftwareController {

    public function indexAction()
    {
        return new View('desarrollo-software');
    }
	public function CarroDeComprasAction()
    {
        return new View('carro-de-compras');
    }
	public function erpAction()
    {
        return new View('erp');
    }
    public function bdAction()
    {
        return new View('bd');
    }
	
}