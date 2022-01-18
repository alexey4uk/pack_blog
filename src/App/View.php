<?php

namespace App;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


class View
{
    private $twig;

    public function __construct(string $templatesPath)
    {
        $loader = new FilesystemLoader($templatesPath);
        $this->twig = new Environment($loader, [
            'cache' => basename(dirname(__DIR__) . '/../../cache'),
            'auto_reload' => true
        ]);
    }

    public function render(string $templateName, array $vars = [])
    {
        return $this->twig->render($templateName, $vars);
    }
}