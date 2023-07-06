<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

  public function index($_locale, $year, $slug, $_format)
  {
    $message = 'Language Selected: ' . $_locale . ' Lamguage Selected: ' . $year . 'Slug Selected: ' . $slug . ' with format:' . $_format;
    return $this->json([
      'message' => $message,
      'path' => 'src/Controller/ArticleController.php',
    ]);
  }
}
