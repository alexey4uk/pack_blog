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

/* /posts/edit.html */
class __TwigTemplate_7aae32cff08fdf6b30a3a93a2d22b52700d99c0fae455f91f900c897d93ea475 extends Template
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
        $this->parent = $this->loadTemplate("/layout.html", "/posts/edit.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"col-md-8\">
  <form method=\"POST\" action=\"edit?id=";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["addpost"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
  <div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Заголовок новости</label>
  <input type=\"text\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["addpost"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "\" name=\"title\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Заголовок новости\">
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Категория</label>
  <input type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["addpost"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
        echo "\" name=\"description\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Категория\">
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Текст новости</label>
  <textarea class=\"form-control\" name=\"content\" id=\"exampleFormControlTextarea1\" rows=\"3\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["addpost"] ?? null), "content", [], "any", false, false, false, 15), "html", null, true);
        echo "</textarea>
</div>
<div class=\"mb-3\">
  <label for=\"exampleFormControlInput1\" class=\"form-label\">Автор</label>
  <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["addpost"] ?? null), "user", [], "any", false, false, false, 19), "html", null, true);
        echo "\" name=\"user\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"\">
</div>
<button type=\"submit\" class=\"btn btn-dark\">Изменить</button>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/posts/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  73 => 15,  66 => 11,  59 => 7,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/posts/edit.html", "/var/www/html/views/posts/edit.html");
    }
}
