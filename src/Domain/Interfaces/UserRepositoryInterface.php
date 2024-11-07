<?php
namespace App\Domain\Interfaces;

use App\Domain\Entities\User;

interface UserRepositoryInterface {
    public function save(User $user);
    public function findById($id);
    public function update(User $user);
    public function delete($id);
}
