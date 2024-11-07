# Projet PHP - Gestion des Utilisateurs

Ce projet est un exemple de gestion des utilisateurs en PHP, conçu en suivant les principes SOLID et la Clean Architecture. 
Il est structuré pour être maintenable, extensible et testable, en séparant clairement les responsabilités dans différentes couches.

## Structure du projet

```
/src
  /Domain
    /Entities
      User.php
    /Interfaces
      UserRepositoryInterface.php
  /Application
    /UseCases
      CreateUserUseCase.php
      GetUserUseCase.php
      UpdateUserUseCase.php
      DeleteUserUseCase.php
  /Infrastructure
    /Persistence
      DatabaseUserRepository.php
  /Presentation
    UserController.php
index.php
composer.json
README.md
/vendor
```

## Prérequis

- PHP 8.x ou supérieur
- Composer
- Serveur de base de données (par exemple, MySQL)
- PDO (PHP Data Objects) activé

## Installation

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/dannidotcom/users.php.git
   cd users.php
   ```

2. **Installer les dépendances** :
   ```bash
   composer install
   ```

3. **Configurer la base de données** :
   Modifiez la configuration de la base de données dans `index.php` :
   ```php
   $pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', 'password');
   ```

4. **Générer l'autoloading** :
   ```bash
   composer dump-autoload
   ```

## Utilisation

Lancez un serveur PHP intégré pour tester l'application :
```bash
php -S localhost:8000
```

Visitez [http://localhost:8000](http://localhost:8000) dans votre navigateur pour interagir avec l'application.

## Fonctionnalités

- **Créer un utilisateur** : Utilise le `CreateUserUseCase` pour ajouter un utilisateur à la base de données.
- **Lire un utilisateur** : Utilise le `GetUserUseCase` pour récupérer les détails d'un utilisateur par son ID.
- **Mettre à jour un utilisateur** : Utilise le `UpdateUserUseCase` pour modifier les informations d'un utilisateur existant.
- **Supprimer un utilisateur** : Utilise le `DeleteUserUseCase` pour supprimer un utilisateur.

## Explication de la Clean Architecture

Le projet est structuré selon la Clean Architecture pour assurer la séparation des préoccupations :
- **Domain** : Contient les entités et les interfaces.
- **Application** : Contient la logique métier (use cases).
- **Infrastructure** : Gère la persistance des données (base de données).
- **Presentation** : Contient les contrôleurs et la logique de présentation.

## Contribuer

1. Fork le projet.
2. Créez une branche pour vos modifications (`git checkout -b feature/nouvelle-fonctionnalite`).
3. Commitez vos modifications (`git commit -am 'Ajouter une nouvelle fonctionnalité'`).
4. Poussez vos modifications (`git push origin feature/nouvelle-fonctionnalite`).
5. Créez une Pull Request.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.