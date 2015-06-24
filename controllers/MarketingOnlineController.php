 <?php

class MarketingOnlineController {

    public function indexAction()
    {
        return new View('marketing-online');
    }
    public function seoAction()
    {
        return new View('seo');
    }
	public function semAction()
    {
        return new View('sem');
    }
	public function SocialMediaAction()
    {
        return new View('social-media');
    }
}