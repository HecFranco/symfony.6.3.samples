<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
  #[Route(
    '/view/{route}',
    name: 'vue_pages_attributes',
    requirements: [
      'route' => '^.+'
    ]
  )]
  public function withAttributes(string $route): JsonResponse
  {
    return new JsonResponse([
      'param' => $route,
      'message' => "Welcome to your new controller! in route $route",
      'path' => 'src/Controller/ViewController.php - withAttributes',
    ]);
  }
}
