# edulog
## installer le projet
git clone git@github.com:Bakary1985/edulog.git
## mettre a jour le projet
composer install
## creer la base de donnee
php bin/console make:migration
## creer les entités
php bin/console make:migrations:migrate

