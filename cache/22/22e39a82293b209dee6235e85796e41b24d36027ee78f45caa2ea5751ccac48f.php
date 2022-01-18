<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.html */
class __TwigTemplate_91fd76c4692a58fbe5bb343fc5afeabebe0920ba6daf928ff98c28fb54a1d97d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
<header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
      <div class=\"col-4 pt-1\">
        <a class=\"link-secondary\" href=\"#\">Subscribe</a>
      </div>
      <div class=\"col-4 text-center\">
        <a class=\"blog-header-logo text-dark\" href=\"/\">Blog</a>
      </div>
      <div class=\"col-4 d-flex justify-content-end align-items-center\">
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
        </a>
        <a class=\"btn btn-sm btn-outline-secondary\" href=\"/singup\">Регистрация</a>
      </div>
    </div>
  </header>

  <div class=\"nav-scroller py-1 mb-2\">
    <nav class=\"nav d-flex justify-content-between\">
      <a class=\"p-2 link-secondary\" href=\"#\">World</a>
      <a class=\"p-2 link-secondary\" href=\"#\">U.S.</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Technology</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Design</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Culture</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Business</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Politics</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Opinion</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Science</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Health</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Style</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Travel</a>
    </nav>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html", "/var/www/html/views/header.html");
    }
}
