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

/* /layout.html */
class __TwigTemplate_2d217cb1c4dbf05edaec94b266a1fee982e2e8919215092808ab309e667f3bcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "  </head>
  <body>

<!-- This Header -->
";
        // line 45
        $this->loadTemplate("header.html", "/layout.html", 45)->display($context);
        // line 46
        echo "

<main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
    <div class=\"col-md-6 px-0\">
      <h1 class=\"display-4 fst-italic\">Title of a longer featured blog post</h1>
      <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class=\"lead mb-0\"><a href=\"#\" class=\"text-white fw-bold\">Continue reading...</a></p>
    </div>
  </div>

  <div class=\"row mb-2\">
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
          <h3 class=\"mb-0\">Featured post</h3>
          <div class=\"mb-1 text-muted\">Nov 12</div>
          <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
          <h3 class=\"mb-0\">Post title</h3>
          <div class=\"mb-1 text-muted\">Nov 11</div>
          <p class=\"mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class=\"row g-5\">
   
    ";
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "
    <!--The Sidebar-->
    ";
        // line 97
        $this->loadTemplate("sidebar.html", "/layout.html", 97)->display($context);
        // line 98
        echo "
    </div>


  </div>

</main>

<!--The Footer-->
";
        // line 107
        $this->loadTemplate("footer.html", "/layout.html", 107)->display($context);
        // line 108
        echo "

    
  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.88.1\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo "</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/blog/\">

    

    <!-- Bootstrap core CSS -->
<link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"/assets/css/blog.css\" rel=\"stylesheet\">
    ";
    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    Hello world!
    ";
    }

    public function getTemplateName()
    {
        return "/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 93,  178 => 92,  143 => 10,  136 => 5,  132 => 4,  123 => 108,  121 => 107,  110 => 98,  108 => 97,  104 => 95,  102 => 92,  54 => 46,  52 => 45,  46 => 41,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/layout.html", "/var/www/html/views/layout.html");
    }
}
