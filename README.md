# ImmoPHPSummer
Projecte PHP per el curs de la Fundació Esplai

# Instrucciones

## Para descargar el proyecto 

    git clone https://github.com/kcurtet/ImmoPHPSummer
    copy|cp .env.example .env`

## Instalar las dependencias

    ```bash
    composer install
    php artisan key:generate
    php artisan migrate[:fresh] # Crear nuevas tablas | Borrar y crear
    php artisan db:seed # agregar datos necesarios a la db
    php artisan db:seed -class FakeDatabaseSeeder # Agregar Fake Data
    ```

## Default Users

| User   | Email              | Password |
|--------|--------------------|----------|
| Admin  | admin@example.com  | password |
| Agent  | agent@example.com  | password |
| Client | client@example.com | password |



No olvidar hacer un `git pull origin master` para agregar los cambios del master.

# Subir cambios

Primero hacemos un `git pull origin master` para comprobar que no hay datos nuevos.

Luego subir al repositorio solo la rama en los que has echo los cambios.

```bash
git push origin {rama} # Nombre de la rama
```
Despues avisar por slack para que alguien revise los cambios.

# Si tienes algun problema prubea

```bash
composer-install
composer-dumpautoload
php artisan migrate:fresh
```
