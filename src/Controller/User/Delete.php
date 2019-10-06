<?php declare(strict_types=1);

namespace App\Controller\User;

class Delete extends Base
{
    public function __invoke($request, $response, array $args)
    {
        $this->getUserService()->deleteUser((int) $args['id']);

        return $response->withHeader('Content-Type', 'application/json')->withStatus(204);
    }
}