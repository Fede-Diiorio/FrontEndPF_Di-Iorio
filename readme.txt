El proyecto cuenta con SASS aplicado y la totalidad de los estilos ha sido desarrollados en scss.
Dicho código se encuentra completamente anidado y se han implemetados las practicas vistas en clase.

Se ha aplicado también las medias de SEO en todos los archivos HTML y se han utilizado imagenes comprimidas para mejorar el rendimiento.

Si bien se han aplicado animaciones en todos los archivos html las más destacables se encuentran en la sección de cartas del index.html y en las cartas de productos.html.

<-- ALGUNAS PRECISIONES -->

Este proyecto se encaró con la idea de poder ser utilizado con los conocimientos que se iran adquinieron a lo largo de la carrera de Full Stack. 
Es por eso que algunos de los html, puntualmente servicios.html, productos.html y producto.html, son meramente ilustrativos.
A medida que vaya adquiriendo los conocimientos pertinentes de JavaScript y backend se iran aplicando en este trabajo.

<-- COMANDOS PARA GIT y GITHUB -->

1. Crear repositorio
2. Ponerle un nombre con - o _
3. abrir visual studio
4. git clone + URL
5. abrir carpeta descargada
6. arrastras archivos a la carpeta nueva
7. git add .
8. git commit -m "Primer mensaje"
9. git branch -M main
10. git push -u origin main

COMMITS y ACTUALIZACIONES
1. git add .
2. git commit -m "mensaje"
3. git push

CREACION DE NUEVAS RAMAS
git checkout ajuste
git add .
git commit -m "mensaje"
git push --set-upstream origin ajuste

git checkout main
git merge ajuste
git push
_______________________________

<-- COMO INSTALAR SASS PARA EL CORRECTO FUNCIONAMIENTO DE ESTE PROYECTO -->

1. Abrir la consola en esta carpeta con ctrl+ñ
    a. npm install nodemon node-sass
    b. npm init // Metralleta de enter
    c. npm i bootstrap@5.3.1

2. Abrir el archivo package.json y editarlo
    a. A continuación de && exit 1" colocar una , presionar enter
    y pegar el siguiente texto:

"build-css": "node-sass --include-path scss scss/main.scss css/main.css",
"watch-css": "nodemon -e scss -x \"npm run build-css\""

3. Crear las carpetas con sus respectivos archivos (EN CASO NO SE REQUIERE)
    a. scss/main.scss
    b. css/main.css

4. En la consola correr el comando
    a. npm run build-css //Por única vez
    b. npm run watch-css

--------------------------------------------

5. Cada vez que se quiera seguir compilando en SASS
    a. abrir la consola con ctrl+ñ
    b. npm run watch-css

//FIN