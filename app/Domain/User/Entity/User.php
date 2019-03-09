<?php

namespace App\Domain\Entity;

class User
{
    /**
     * @var int
     */
    public $id;

    /**
     * User constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}