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

/* /posts/index.html */
class __TwigTemplate_d44b266f9fa1b2d1dbe84af92f8c935f7f283ec92c03f9811e2f14882065b5f5 extends Template
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
        $this->parent = $this->loadTemplate("/layout.html", "/posts/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"col-md-8\">
  <h3 class=\"pb-4 mb-4 fst-italic border-bottom\">
    Список материалов
  </h3>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "  <article class=\"blog-post\">
    <h2 class=\"blog-post-title\"><a href=\"/post/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></h2>
    <p class=\"blog-post-meta\">Автор: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 11), "html", null, true);
            echo "</a></p>

    <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
    <hr>
    <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>

  </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  <nav class=\"blog-pagination\" aria-label=\"Pagination\">
    <a class=\"btn btn-outline-primary\" href=\"#\">Older</a>
    <a class=\"btn btn-outline-secondary disabled\">Newer</a>
  </nav>
";
    }

    public function getTemplateName()
    {
        return "/posts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  79 => 15,  74 => 13,  69 => 11,  63 => 10,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/posts/index.html", "/var/www/html/views/posts/index.html");
    }
}
