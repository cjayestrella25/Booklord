<?php

namespace App\Controller;

use App\Respository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    
     /**
     * @Route("/book", name="book")
     */
    public function showBooks()
    {
        return $this->render('book/list.html.twig');
            
        
    }
}







    

