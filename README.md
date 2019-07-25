# ImmoPHPSummer
Projecte PHP per el curs de la Fundació Esplai

# Instrucciones

Para descargar el proyecto 

    git clone https://github.com/kcurtet/ImmoPHPSummer
    copy|cp .env.example .env`

Crear una rama nueva
```bash2
git checkout -b {new-branch}`
```
Instalar lo que falta
```bash
composer install

npm install # Necesitas Node.js

npm run dev # Para compilar los archivos css y js de la carpeta resources a public/assets

npm run watch # Lo mismo que run dev pero recompila los archivos cuando cambias algo    

php artisan key:generate # Simplemente es por seguridad en proyectos para producción
php artisan migrate[:fresh] # Crear nuevas tablas | Borrar y crear
php artisan db:seed # Agregar Fake Data
```

## Default Users

| User   | Email              | Password |
|--------|--------------------|----------|
| Admin  | admin@example.com  | password |
| Agent  | agent@example.com  | password |
| Client | client@example.com | password |



No olvidar hacer un `git pull origin master` para agregar los cambios del master.

Y si estas trabajando en una rama comprueba que no tienes que hacer un merge para agregar los nuevos cambios del master a tu rama.
```bash
git checkout {rama con cambios} # Nos dirigimos a nuestra rama
git merge master # Para agregar los cambios del master a tu rama
```

# Subir cambios

Primero hacemos un `git pull origin master` para comprobar que no hay datos nuevos.

Luego subir al repositorio solo la rama en los que has echo los cambios.

```bash
git push origin {rama} # Nombre de la rama
```
Despues avisar por slack para que alguien revise los cambios.
