<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(array $data): void
    {


        $head = $this->seo->render(
            CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );


        echo $this->view->render("home", [
            "head" => $head
        ]);
    }

    public function about(array $data): void
    {

        $head = $this->seo->render(
            CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );


        echo $this->view->render("about", [
            "head" => $head
        ]);


        
    }
}
