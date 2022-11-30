<?php

namespace App\Application\Schema\PerguntaFrequenteBundle\Controller;

use App\Application\Schema\PerguntaFrequenteBundle\Entity\PerguntaFrequente;
use App\Application\Schema\PerguntaFrequenteBundle\Form\PerguntaFrequenteType;

use App\Application\Project\ContentBundle\Controller\Base\BaseWebController;
use App\Application\Project\ContentBundle\Attributes\Acl as ACL;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;


#[Route('/web/perguntaFrequente', name: 'web_perguntaFrequente_', methods: ['GET'])]
#[ACL\Web(enable: true, title: 'PerguntaFrequente', description: 'Permissões do modulo PerguntaFrequente')]
class PerguntaFrequenteWebController extends BaseWebController
{
    public function getBaseRouter(): string
    {
        return 'web_perguntaFrequente_';
    }

    public function getRepository(): string
    {
        return PerguntaFrequente::class;
    }

    public function getBaseTemplate(): string
    {
        return "@ApplicationSchemaPerguntaFrequente/perguntaFrequente/";
    }

    #[Route('', name: 'list', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Listar', description: 'Lista PerguntaFrequente')]
    public function listAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'listAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Listar PerguntaFrequente',
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Criar', description: 'Cria PerguntaFrequente')]
    public function createAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'createAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Criar PerguntaFrequente',
        ]);
    }

    #[Route('/{id}/show', name: 'show', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Visualizar', description: 'Visualiza PerguntaFrequente')]
    public function showAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'showAction');


        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Visualizar PerguntaFrequente',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Editar', description: 'Edita PerguntaFrequente')]
    public function editAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'editAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Editar PerguntaFrequente',
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Deletar', description: 'Deleta PerguntaFrequente')]
    public function deleteAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'deleteAction');

    }

}