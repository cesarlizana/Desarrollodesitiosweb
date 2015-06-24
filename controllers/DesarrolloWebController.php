<?php

class DesarrolloWebController {

    public function indexAction()
    {
        return new View('desarrolloweb');
    }
    public function newsletterAction()
    {
        return new View('newsletter');
    }
	public function landingpageAction()
    {
        return new View('landingpage');
    }
    public function landing1Action()
    {
        return new View('landing1');
    }
    public function landing2Action()
    {
        return new View('landing2');
    }
    public function landing3Action()
    {
        return new View('landing3');
    }
    public function landing4Action()
    {
        return new View('landing4');
    }
    public function plan1Action()
    {
        return new View('plan1');
    }
	public function plan2Action()
    {
        return new View('plan2');
    }
    public function plan3Action()
    {
        return new View('plan3');
    }
    public function responsiveplan1Action()
    {
        return new View('responsive-plan1');
    }
    public function responsiveplan2Action()
    {
        return new View('responsive-plan2');
    }
    public function responsiveplan3Action()
    {
        return new View('responsive-plan3');
    }
	public function compararPlanesAction()
    {
        return new View('compararplanes');
    }
	public function frontendAction()
    {
        return new View('frontend');
    }
}