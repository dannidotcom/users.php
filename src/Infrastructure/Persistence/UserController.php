<?php
namespace App\Presentation;

use App\Application\UseCases\CreateUserUseCase;
use App\Application\UseCases\GetUserUseCase;

class UserController {
    private $createUserUseCase;
    private $getUserUseCase;

    public function __construct(CreateUserUseCase $createUserUseCase, GetUserUseCase $getUserUseCase) {
        $this->createUserUseCase = $createUserUseCase;
        $this->getUserUseCase = $getUserUseCase;
    }

    public function create($id, $name, $email) {
        $this->createUserUseCase->execute($id, $name, $email);
        echo "User created successfully!";
    }

    public function get($id) {
        $user = $this->getUserUseCase->execute($id);
        if ($user) {
            echo "User ID: " . $user->getId() . ", Name: " . $user->getName() . ", Email: " . $user->getEmail();
        } else {
            echo "User not found.";
        }
    }
}
