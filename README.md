# community

## Installer les dependances

Dans le dossier /community-laravel :

* ouvrir un terminal et lancer :

        composer install

## Configurer la base de données

copier le ficher .env.example et le renommer en .env

``` .env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TaBaseDeDonnees
DB_USERNAME=username
DB_PASSWORD=TonMotDePasse

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

```

### Authentification de l'application

Pour generer la clé app automatiquement :

* ouvrir un terminal et tapez :

        php artisan key:generate

### Creation de la base de données

Migrer la base de donnnées :

* ouvrir un terminal et tapez :

        php artisan migrate

## Lancer le serveur

        php artisan serve

## creer un admin

    php artisan tinker

* suivre les etapes et rentrer les infos suivantes :

    ```php
    use App\User;
    ```

    ```php
    $user = new User;
    $user->name = 'admin';
    $user->email = 'admin@example.fr';
    $user->password = Hash::make('adminpassword');
    $user->type = 'admin';
    $user->save();
    ```

Voila, tu es admin tu peux te connecter !  :)

## En cas de Bug JS

Si app.js n'est pas pris en compte ou le dossier après modifications du code :

Pour generer un nouveau build (mix-laravel) pour Webpack.mix.js :

* tapez dans le terminal

        npm install

* Il va generer le node_modules avec toutes les packages et pour generer webpack, on lance :

        npm run dev
