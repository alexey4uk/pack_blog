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

/* /posts/create.html */
class __TwigTemplate_c106ded4cb50171229cb12721ae2f713129ab584ac84ef708f79f0fea5d9a255 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/layout.html", "/posts/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"col-md-8\">
<form method=\"POST\" action=\"\">
  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Заголовок новости</label>
  <input type=\"text\" name=\"title\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Заголовок новости\">
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Категория</label>
  <input type=\"text\" name=\"description\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Категория\">
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Текст новости</label>
  <textarea class=\"form-control\" name=\"content\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Автор</label>
  <input type=\"text\" name=\"user\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"\">
</div>
<button type=\"submit\" class=\"btn btn-dark\">Добавить</button>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/posts/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/posts/create.html", "/var/www/html/views/posts/create.html");
    }
}
