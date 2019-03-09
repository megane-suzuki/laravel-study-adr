<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Domain\Service\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Responder\UserResponder;
use Illuminate\Http\Response;

final class UserIndexAction extends Controller
{
    /**
     * @var UserService
     */
    private $domain;

    /**
     * @var UserResponder
     */
    private $userResponder;

    public function __construct(UserService $userService, UserResponder $userResponder)
    {
        $this->domain = $userService;
        $this->userResponder = $userResponder;
    }

    /**
     * @param UserRequest $_
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UserRequest $_, int $id): Response
    {
        $user = $this->domain->retrieveUser($id);

        return $this->userResponder->response($user);
    }
}
