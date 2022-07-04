<?php
// src/Controller/HelloController.php
namespace App\Controller;

use App\Services\ComplexObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    /**
     * @Route("/home", name="accueil")
     */
    public function home()
    {
        return new Response(" Bienvenue sur la page d'accueil ! ");
    }

    /**
     * Page d'accès à un article
     * 
     * @Route("/article/{articleId}", name="show-article")
     */
    public function show($articleId)
    {
        // Nous retrouvons la valeur de la variable $articleId à partir de l'URI
        // Par exemple /article/1234 => $articleId = '1234'

        return new Response(" Voici le contenu de l'article avec l'ID $articleId ");
    }
    /**
     * @Route("/acceuill", name="accueill")
     */
    public function index(ComplexObject $complexObject)
    {
        //$complexObject->doSomething();
    }
}