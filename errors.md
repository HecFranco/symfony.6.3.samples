## problemas de permisos

* **Unable to create the storage directory (/var/www/symfony/var/cache/dev/profiler).**

> ejecutaremos en consola (dentro del contenedor de php) el comando:

```bash
$ docker exec -ti symfony_php bash
# chown -R www-data:www-data <folder-path>
```

> siendo `<folder-path>` el ejemplo de la ubicación.

En nuestro caso:

```bash
$ docker exec -ti symfony_php bash
# chown -R www-data:www-data ./var/*
```