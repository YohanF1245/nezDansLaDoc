<?php
   namespace App\Entity;

   use App\Repository\ProductRepository;
   use Doctrine\ORM\Mapping as ORM;
   
   #[ORM\Entity(repositoryClass: ProductRepository::class)]
    


?>