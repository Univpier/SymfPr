<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Test;
use App\DTO\Response\TestDTO;
class MainController extends AbstractController
{

    /**
     * @Route("/main", name="main")
     */
    public function index(Test $test)
    {
        $dto = new TestDTO();

        $dto->name = $test->getName();
        $dto->id = $test->getId();
        $dto->parentid = $test->getParentid();
        echo json_encode($dto);
//        $repository = $doctrine->getRepository(Test::class);
//        $test= $repository->findAll();
//      var_dump($test[0]->id);
//        $dto = new TestDTO;
//        foreach($test as $value){
//            $dto->name = $test[$value]->name;
//            $dto->id = $test[$value]->id;
//            $dto->parentid = $test[$value]->parentid;
//        }
//        echo json_encode($dto);
//        $dto->name = $test->$test["0"]->name;
//        echo json_encode($dto);

//            $dto->name = $entityTest->getName();
//            $dto->id = $entityTest->getId();
//            $dto->parentid = $entityTest->getParentid();



//        return json_encode($dto);
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
