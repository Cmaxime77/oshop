<?php

class MainController
{
    public function home()
    { 
        $dbdata = new DBData;
        $categories = $dbdata->getHomeCategories();
        dump($categories);
        
        $this->show('home', [
            'title' => 'Dans les shoe',
            'categories' => $categories
        ]);
    }

    public function legalMentions()
    {
        $this->show('legal_mentions', [
            'title' => 'Mentions légales'
        ]);
    }

    public function error404()
    {
        $this->show('error404', [
            'title' => 'Page non trouvée'
        ]);
    }

    private function show($viewName, $viewVars = array())
    {
        global $router;
        // $viewVars est disponible dans chaque fichier de vue
        $viewVars['baseUrl'] = $_SERVER['BASE_URI'];

        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
    }
}