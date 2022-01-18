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

/* sidebar.html */
class __TwigTemplate_f5a94bf9c3711c88d75e8d51a9f03dd6a4b20fc2bcb857724c5789e6d2b3400b extends Template
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
        echo "<div class=\"col-md-4\">
  <div class=\"position-sticky\" style=\"top: 2rem;\">
    <div class=\"p-4 mb-3 bg-light rounded\">
      <h4 class=\"fst-italic\">О нас</h4>
      <p class=\"mb-0\">Информация о нас.</p>
      </div>

      <div class=\"p-4\">
        <h4 class=\"fst-italic\">Archives</h4>
        <ol class=\"list-unstyled mb-0\">
          <li><a href=\"#\">March 2021</a></li>
          <li><a href=\"#\">February 2021</a></li>
          <li><a href=\"#\">January 2021</a></li>
          <li><a href=\"#\">December 2020</a></li>
          <li><a href=\"#\">November 2020</a></li>
          <li><a href=\"#\">October 2020</a></li>
          <li><a href=\"#\">September 2020</a></li>
          <li><a href=\"#\">August 2020</a></li>
          <li><a href=\"#\">July 2020</a></li>
          <li><a href=\"#\">June 2020</a></li>
          <li><a href=\"#\">May 2020</a></li>
          <li><a href=\"#\">April 2020</a></li>
        </ol>
      </div>

      <div class=\"p-4\">
        <h4 class=\"fst-italic\">Elsewhere</h4>
        <ol class=\"list-unstyled\">
          <li><a href=\"#\">GitHub</a></li>
          <li><a href=\"#\">Twitter</a></li>
          <li><a href=\"#\">Facebook</a></li>
        </ol>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html", "/var/www/html/views/sidebar.html");
    }
}
