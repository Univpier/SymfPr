<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Test;
class MainController extends AbstractController
{

    /**
     * @Route("/main", name="main")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Test::class);
        $test= $repository->findAll();
        dd($test);
//        $req = $test->findAll();
//        echo json_decode($req);
//        $arr=[];
//        $request = new Test();
////        $request = $this->getDoctrine()->getRepository(Test::class)->findAll();
//
//        foreach ($request as $value){
//            $arr[] = $request->name->get($value););
//        }
//        echo json_encode($arr);


//        $request = new Test();
//        $request = $request->getName();

//        dd($arr);
//        return $this->render('main/index.html.twig', [
//            'controller_name' => 'MainController',
//        ]);
    }
}
