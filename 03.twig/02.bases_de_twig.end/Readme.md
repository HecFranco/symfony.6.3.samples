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

Para entrar a ver el proyecto accede a [http://localhost:80](http://localhost:80)