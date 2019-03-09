<?php

namespace App\Repository;

use App\Domain\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return \App\Domain\Entity\User
     */
    public function find(int $id): User;
}