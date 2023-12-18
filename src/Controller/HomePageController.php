<?php

namespace App\Controller;


use App\Service\ArticleServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    private const RECENT_ARTICLE_COUNT_ON_HOME =5;
    #[Route('/', name: 'homepage')]
    public function index(ArticleServiceInterface $articleService): Response
    {
        return $this->render('home_page/index.html.twig', [
            'articles' => $articleService->getRecentArticles(count: 5),
        ]);
    }
}
