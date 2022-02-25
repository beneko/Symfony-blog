<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('blog/home.html.twig',[
            
        ]);
    }

    /**
     * @Route("blog/new", name="blog_new")
     */
    public function create(Request $request,ManagerRegistry $doctrine): Response {

        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article->setCreatedAt(NEW \DateTimeImmutable());
            $article = $form->getData();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('blog_show', ['id' => $article->getId()] );
        }
        return $this->render('blog/create.html.twig',[
            'formArticle' => $form->createView()
        ]);
    }

    /**
     * @Route("blog/{id}", name="blog_show")
     */
    public function show(Article $article){
        
        return $this->render('blog/show.html.twig',[
            'article' => $article
        ]);
    }
}
