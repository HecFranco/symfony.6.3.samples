## Construir contenedores

```bash
$ docker compose build --no-cache
```
> Sólo es necesario lanzarlo la primera vez, una vez construida la imagen ya no necesitas volver a crearla.

## Levantar contenedores

```bash
$ docker compose up -d
```

## Acceder al contenedor de PHP

```bash
$ docker exec -ti symfony_php bash
```

## Instalar dependencias de PHP dentro del contenedor

```bash
$ docker exec -ti symfony_php bash

# composer install
# composer require symfony/maker-bundle --dev
# php bin/console make:controller FirstController
```

```diff
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
--  #[Route('/first', name: 'app_first')]
++  #[Route('/', name: 'app_first')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
```

Para entrar a ver el proyecto accede a [http://localhost:80](http://localhost:80)