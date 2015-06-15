<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace TEST\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PhotoController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('TESTPlatformBundle:Photo:index.html.twig', array(
                'name' => 'World'
            )
        );
        return new Response("$content");
    }
    
    public function addFormularAction()
    {
        $content = $this
            ->get('templating')
            ->render('TESTPlatformBundle:Photo:add_formular.html.twig', array(
            )
        );
        return new Response("$content");
    }
    
    public function viewAction($soc_name, $title, $ext)
    {
        $content = $this
            ->get('templating')
            ->render('TESTPlatformBundle:Photo:view_photo.html.twig', array(
                'soc_name' => $soc_name,
                'title' => $title,
                'ext' => $ext
            )
        );
        return new Response("$content");
    }
}