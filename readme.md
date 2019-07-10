# Projet Kagiso

## Installation

Cloner le dépôt :

```
git clone https://github.com/Littlefox974/kagiso Kagiso
cd Kagiso
```

Installer les dépendance `composer` et `npm`

```
composer install

npm install
```

## Configuration

Créer le fichier de configuration `.env` à partir de l'exemple fourni 

```
cp .env.example .env
```

Générer la clé de chiffrement de Laravel

```
php artisan key:generate
```

Créer la base de données

```
mysql -u votreCompte -p // root par défaut
CREATE DATABASE homestead;
```

Si vous n'utilisez pas les identifiant par défaut, il faut les renseigner dans le fichier `.env` avant de continuer.

## Mise en route

On lance les scripts de migration et de seed. Ils vont s'occuper de :

- Créer l'utilisateur de la base de données
- Créer les tables
- Les remplir

```
php artisan migrate:fresh
php artisan db:seed
```

L'application est à présent prête à être servie en exécutant

```
php artisan serve
```

## PS.

La dernière randonnée est un Lorem Ipsum. C'est normal, c 'est la dernière randonée à avoir été générée lors du seed.
