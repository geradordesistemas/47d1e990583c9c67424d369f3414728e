<?php

namespace App\Application\Schema\StatusEmpreendimentoBundle\Controller;

use App\Application\Schema\StatusEmpreendimentoBundle\Entity\StatusEmpreendimento;
use App\Application\Schema\StatusEmpreendimentoBundle\Form\StatusEmpreendimentoType;

use App\Application\Project\ContentBundle\Controller\Base\BaseWebController;
use App\Application\Project\ContentBundle\Attributes\Acl as ACL;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;


#[Route('/web/statusEmpreendimento', name: 'web_statusEmpreendimento_', methods: ['GET'])]
#[ACL\Web(enable: true, title: 'StatusEmpreendimento', description: 'Permissões do modulo StatusEmpreendimento')]
class StatusEmpreendimentoWebController extends BaseWebController
{
    public function getBaseRouter(): string
    {
        return 'web_statusEmpreendimento_';
    }

    public function getRepository(): string
    {
        return StatusEmpreendimento::class;
    }

    public function getBaseTemplate(): string
    {
        return "@ApplicationSchemaStatusEmpreendimento/statusEmpreendimento/";
    }

    #[Route('', name: 'list', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Listar', description: 'Lista StatusEmpreendimento')]
    public function listAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'listAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Listar StatusEmpreendimento',
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Criar', description: 'Cria StatusEmpreendimento')]
    public function createAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'createAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Criar StatusEmpreendimento',
        ]);
    }

    #[Route('/{id}/show', name: 'show', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Visualizar', description: 'Visualiza StatusEmpreendimento')]
    public function showAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'showAction');


        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Visualizar StatusEmpreendimento',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Editar', description: 'Edita StatusEmpreendimento')]
    public function editAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'editAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Editar StatusEmpreendimento',
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Deletar', description: 'Deleta StatusEmpreendimento')]
    public function deleteAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'deleteAction');

    }

}