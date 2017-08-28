<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller implements TokenAuthenticatedController
{
    public function indexAction(Request $request)
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
}
