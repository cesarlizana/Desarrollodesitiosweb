<?php

class DisenoGraficoController {

    public function indexAction()
    {
        return new View('disenografico');
    }
    public function imagencorporativaAction()
    {
        return new View('imagen-corporativa');
    }
	public function disenoAction()
    {
        return new View('diseno');
    }
	public function impresionAction()
    {
        return new View('impresion');
    }
    public function vectorizacionAction()
    {
        return new View('vectorizacion');
    }
}