<?php

namespace Project\Controller;

use Butterfly\Adapter\Twig\IRenderer;
use Symfony\Component\HttpFoundation\Response;

/**
 * @service controller.site
 * @arguments ["Butterfly\\Adapter\\Twig\\IRenderer", "%bfy_app.template_of_404%"]
 */
class SiteController
{
    /**
     * @var IRenderer
     */
    protected $render;

    /**
     * @var string
     */
    protected $templateOf404;

    /**
     * @param IRenderer $render
     * @param string $templateOf404
     */
    public function __construct(IRenderer $render, $templateOf404)
    {
        $this->render        = $render;
        $this->templateOf404 = $templateOf404;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function page404Action()
    {
        $content = $this->render->render($this->templateOf404);

        return new Response($content);
    }
}
