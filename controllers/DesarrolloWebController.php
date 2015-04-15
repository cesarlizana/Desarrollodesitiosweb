<?php

class DesarrollowebController {

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
}