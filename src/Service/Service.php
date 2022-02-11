<?php

namespace App\Service;
use App\Repository\TestRepository;
use Doctrine\ORM\EntityManagerInterface;
class Service
{
    private $EntityManagerInterface;
    private $testRepository;
    public function __construct(EntityManagerInterface $EntityManagerInterface, TestRepository $testRepository)
    {
     $this->EntityManagerInterface = $EntityManagerInterface;
     $this->testRepository = $testRepository;
    }

    public function output(int $id){
        $output = $this->testRepository->find($id);
        return ['name' => $output->getName(),'parentid' => $output->getParentid()];
    }
}