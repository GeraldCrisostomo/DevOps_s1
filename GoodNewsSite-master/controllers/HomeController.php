<?php

class HomeController{
	
	public function __construct() {

	}
			
	public function run(){	
		
		# Un contrôleur se termine en écrivant une vue
		require_once(VIEW_PATH . 'home.php');
	}

    /**
     * @return HomeController
     */
    public static function GetHomeController()
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }

}
