<?php

namespace App\Http\Responder;

use App\Domain\Entity\User;
use Illuminate\Http\Response;
use Illuminate\View\Factory as ViewFactory;

class UserResponder
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * @var Factory
     */
    protected $view;

    /**
     * UserResponder constructor.
     *
     * @param Response $response
     * @param ViewFactory $view
     */
    public function __construct(Response $response, ViewFactory $view)
    {
        $this->response = $response;
        $this->view = $view;
    }

    /**
     * @param User $user
     *
     * @return Response
     */
    public function response(User $user): Response
    {
        if (! $user->id) {
            $this->response->SetStatusCode(Response::HTTP_NOT_FOUND);
        }

        $content = $this->view->make('user.index', ['user' => $user]);

        return $this->response->setContent($content);
    }
}