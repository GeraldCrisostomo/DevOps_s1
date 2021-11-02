<?php

class ControllerManager
{

    /**
     * @return GenesisController
     */
    public static function GetGenesisController()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }

    /**
     * @return BooksController
     */
    public static function GetBooksController()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function GetContactController()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
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