<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class blogController extends AbstractController
{
    private $articles= [
        'article 1' => [
            'title' => 'Titre de l\'article 1',
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 1,
            'img' => 'img/1.jpg'
        ],
        'article 2' => [
            'title' => 'Titre de l\'article 2',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 2,
            'img' => 'img/2.jpg'
        ],
        'article 3' => [
            'title' => 'Titre de l\'article 3',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 3,
            'img' => 'img/3.jpg'
        ],
        'article 4' => [
            'title' => 'Titre de l\'article 4',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 4,
            'img' => 'img/4.jpg'
        ],
        'article 5' => [
            'title' => 'Titre de l\'article 5',
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 5,
            'img' => 'img/5.jpg'
        ],
        'article 6' => [
            'title' => 'Titre de l\'article 6',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 6,
            'img' => 'img/6.jpg'
        ],
        'article 7' => [
            'title' => 'Titre de l\'article 7',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 7,
            'img' => 'img/7.jpg'
        ],
        'article 8' => [
            'title' => 'Titre de l\'article 8',
            'content' => '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, doloribus enim facilis fugiat illum in incidunt inventore maxime nam officiis perspiciatis reprehenderit, soluta, voluptatem. Dolorum enim explicabo fugiat hic voluptatibus?',
            'id' => 8,
            'img' => 'img/8.jpg'
        ]
    ];


    /**
     * @Route("/", name="article_list")
     */
    public function articleList(){
        $title = 'Au-delà du phare';
        $articles = $this->articles;

        return $this->render('blog.html.twig', [
            'articles' => $articles,
            'title' => $title
        ]);
    }

    /**
     * @Route ("/article_show/{id}", name="article_show")
     */
    public function articleShow($id){
        $articles = $this->articles;
        $title = 'Au-delà du phare';

        return $this->render('article.html.twig', [
            'article' => $articles["article ".$id],
            'title' => $title
        ] );
    }
}