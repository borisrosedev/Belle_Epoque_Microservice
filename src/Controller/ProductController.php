<?php
namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    #[Template('product/index.html.twig')]
    public function index(): array
    {
        // ...

        // when using the #[Template] attribute, you only need to return
        // an array with the parameters to pass to the template (the attribute
        // is the one which will create and return the Response object).
        return [
            'category' => '...',
            'promotions' => ['...', '...'],
        ];
    }
}