<?php

namespace App\Application\UseCases;

use App\Domain\Entities\User;
use App\Domain\Interfaces\UserRepositoryInterface;

class CreateUserUseCase {
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function execute($id, $name, $email) {
        $user = new User($id, $name, $email);
        $this->userRepository->save($user);
    }
}
