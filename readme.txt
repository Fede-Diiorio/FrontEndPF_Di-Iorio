COMANDOS PARA GIT y GITHUB

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

//COMO EMPEZAR A COMPILAR SASS//

1. Abrir la consola en esta carpeta con ctrl+ñ
    a. npm install nodemon node-sass
    b. npm init // Metralleta de enter

2. Abrir el archivo package.json y editarlo
    a. A continuación de && exit 1" colocar una , presionar enter
    y pegar el siguiente texto:

"build-css": "node-sass --include-path scss scss/main.scss css/main.css",
"watch-css": "nodemon -e scss -x \"npm run build-css\""

3. Crear las carpetas con sus respectivos archivos
    a. scss/main.scss
    b. css/style.css

4. En la consola correr el comando
    a. npm run build-css //Por única vez
    b. npm run watch-css


5. Cada vez que se quiera seguir compilando en SASS
    a. abrir la consola con ctrl+ñ
    b. npm run watch-css

//FIN