<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $uti = $entityManager
            ->getRepository(Admin::class)
            ->findAll();
        return $this->render('user/index.html.twig', [
            'us' => $uti
        ]);
    }
}
