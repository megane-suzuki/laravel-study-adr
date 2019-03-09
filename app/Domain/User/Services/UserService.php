<?php

namespace App\Domain\Service;

use App\Domain\Entity\User;
use App\Repository\UserRepositoryInterface;

class UserService
{
    /**
     * @var \App\Repository\UserRepositoryInterface
     */
    private $repository;

    /**
     * UserService constructor.
     *
     * @param \App\Repository\UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return \App\Domain\Entity\User
     */
    public function retrieveUser(int $id): User
    {
        return $this->repository->find($id);
    }
}