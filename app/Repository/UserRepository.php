<?php

namespace App\Repository;

use App\Domain\Entity\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return \App\Domain\Entity\User
     */
    public function find(int $id): User
    {
        return new User($id);
    }
}