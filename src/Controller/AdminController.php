<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Admin;
use App\Entity\ExpCdr011;
use App\Form\RegistrationFormType;
use App\Repository\ExpCdr011Repository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(EntityManagerInterface $entityManager ,ExpCdr011Repository $ExpCdr011Repository): Response
    {
        
        $admin = $entityManager
            
            ->getRepository(Admin::class)
            ->findAll();
            $user = $this->getUser();
        if ($user->getRoles() == ["ROLE_ADMIN"]){
        return $this->render('admin/index.html.twig', [
            'ad' =>$admin
        ]);
        }
        else if ($user->getRoles()==["ROLE_USER"]){
         $histo= $ExpCdr011Repository->findByExampleField($user->getNumero());
        
         return $this->render('historique/index.html.twig', [
            'hi'=> $histo
        
    ]);
        
        
    }}
     /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Request $request, Admin $admin): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($admin);
        $em->flush();

        return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/add", name="add" )
     */
    public function addlivre(Request $request, EntityManagerInterface $entityManager,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $admin = new Admin();
        $form = $this->createForm(RegistrationFormType::class, $admin);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() ) {
            $em = $this->getDoctrine()->getManager();
            $admin->setPassword(
                $userPasswordHasher->hashPassword(
                        $admin,
                        $form->get('plainPassword')->getData()
                    )
                );
            $file = $form->get('image')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
           
            $file->move($this->getParameter('images_directory'),$fileName);
            $admin->setImage($fileName);
            $em->persist($admin);
            $em->flush();
            $this->addFlash('info', 'Created Successfully !');
            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/add.html.twig', [
            'ad' => $admin,
            'f' => $form->createView(),
        ]);
    }
      
    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Request $request ,$id): Response
    {
        $admin= $this-> getDoctrine()->getManager()->getRepository(Admin::class)->find($id);
        $form = $this->createForm(RegistrationFormType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/add.html.twig', [
            
            'f' => $form->createView(),
        ]);
    }
   
}

