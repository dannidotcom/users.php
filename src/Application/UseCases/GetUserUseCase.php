<?php

namespace App\Application\UseCases;

use App\Domain\Interfaces\UserRepositoryInterface;

class GetUserUseCase {
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function execute($id) {
        return $this->userRepository->findById($id);
    }
}
