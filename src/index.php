<?php

require 'vendor/autoload.php';

use App\Infrastructure\Persistence\DatabaseUserRepository;
use App\Application\UseCases\CreateUserUseCase;
use App\Application\UseCases\GetUserUseCase;
use App\Presentation\UserController;

// Configurer la connexion PDO
$pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', 'password');

// Initialiser les couches de l'application
$userRepository = new DatabaseUserRepository($pdo);
$createUserUseCase = new CreateUserUseCase($userRepository);
$getUserUseCase = new GetUserUseCase($userRepository);
$userController = new UserController($createUserUseCase, $getUserUseCase);

// Exemple de création d'un utilisateur
$userController->create(1, 'John Doe', 'john@example.com');

// Exemple de récupération d'un utilisateur
$userController->get(1);
