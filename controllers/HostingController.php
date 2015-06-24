 <?php

class HostingController {

    public function indexAction()
    {
        return new View('hosting');
    }
    public function resellerAction()
    {
        return new View('reseller');
    }
	public function vpsAction()
    {
        return new View('vps');
    }
    public function cloudAction()
    {
        return new View('cloud');
    }
}