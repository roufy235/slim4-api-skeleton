<?php declare(strict_types=1);

namespace App\Controller\Notes;

class GetOne extends Base
{
    public function __invoke($request, $response, array $args)
    {
        $notes = $this->getNotesService()->getNotes((int) $args['id']);

        $payload = json_encode($notes);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
}
