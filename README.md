# Laravel Cinema v3.0

El presente proyecto se realizó en el primer semestre del año 2023, este proyecto es un fork mejorado que realizamos en conjunto para darle otro toque especial al trabajo de Alfredo Jíminez, programador europeo.

## ¿Cómo ejecuto este proyecto?
Antes de empezar, debe tener **composer y xampp instalados** en su máquina preferible con Windows. Si cumple con ello entonces realice esto:

1. Primero descargue o clone el proyecto.
2. Dentro de phpmyadmin (XAMPP) cree una base de datos en blanco con el nombre *cinemajje*.
3. Renombre el archivo *.env.example* a *.env* y editelo con el nombre de la base de datos *cinemajje*, etc...
4. Abra su terminal y posicionese dentro de la raíz del proyecto.

Ejecute los siguientes comandos en el mismo orden.
```bash
  composer update
  php artisan key:generate
  php artisan migrate
  php artisan serve
```

Si le dio algún error, fue porque algo hizo mal.

### Contribuidor
- Josué Romero