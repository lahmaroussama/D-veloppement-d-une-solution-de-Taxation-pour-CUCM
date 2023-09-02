<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ExpCdr011;
use App\Repository\ExpCdr011Repository;
use Symfony\Component\HttpFoundation\Request;
class HistoriqueController extends AbstractController
{
    /**
     * @Route("/historique", name="app_historique")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,ExpCdr011Repository $ExpCdr011Repository): Response
    {
        
        $histor=$ExpCdr011Repository->findAll();
        $histo = $ExpCdr011Repository
            
            ->findAll();
            $user = $this->getUser();
            if ($request->isMethod("POST"))
     {
      $callingPartyNumber=$request->get('callingPartyNumber');
      $duration=$request->get('duration');
      $originalcalledpartynumber=$request->get('originalcalledpartynumber');
      $datetimeconnect=$request->get('datetimeconnect');
      $histor=$ExpCdr011Repository->findBytype($callingPartyNumber);
      
     }
            if ($user->getRoles() == ["ROLE_ADMIN"]){
        return $this->render('historique/index.html.twig', [
            'hi' => $histo,
            'his' => $histor
        ]);
    }}
    

    
}
