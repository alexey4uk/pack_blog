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

/* /users/register.html */
class __TwigTemplate_17af27da254332a31340ec21316ee572e79259a4bac9f954472b48e37336ea01 extends Template
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
        $this->loadTemplate("header.html", "/users/register.html", 45)->display($context);
        // line 46
        echo "

<main class=\"container\">

  <div class=\"row g-5\">
  <div class=\"col-md-8\">
    <form method=\"POST\">
      <div class=\"mb-4\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Логин</label>
        <input type=\"text\" name=\"login\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
      </div>
      <div class=\"mb-4\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Email адресс</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
      </div>
      <div class=\"mb-4\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Имя</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
      </div>
      <div class=\"mb-4\">
        <label for=\"exampleInputPassword1\" class=\"form-label\">Пароль</label>
        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
      </div>
      <button type=\"submit\" class=\"btn btn-primary\">Зарегистрироваться</button>
    </form>
  </div>
  <!--The Sidebar-->
";
        // line 73
        $this->loadTemplate("sidebar.html", "/users/register.html", 73)->display($context);
        // line 74
        echo "    </div>



  </div>

</main>

<!--The Footer-->
";
        // line 83
        $this->loadTemplate("footer.html", "/users/register.html", 83)->display($context);
        // line 84
        echo "

    
  </body>
</html>";
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
    <title>Регистрация</title>

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

    public function getTemplateName()
    {
        return "/users/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 5,  105 => 4,  97 => 84,  95 => 83,  84 => 74,  82 => 73,  53 => 46,  51 => 45,  45 => 41,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/users/register.html", "/var/www/html/views/users/register.html");
    }
}
