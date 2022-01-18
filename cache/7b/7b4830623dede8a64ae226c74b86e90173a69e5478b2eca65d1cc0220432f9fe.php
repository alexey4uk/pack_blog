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

/* /users/login.html */
class __TwigTemplate_c098a625d0a2e8be75a827db171ccf4747d66eea68726a5c4bd3c48b947fe54b extends Template
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
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.88.1\">
    <title>Авторизация</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/sign-in/\">

    

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
    <link href=\"/assets/css/signin.css\" rel=\"stylesheet\">
  </head>
  <body class=\"text-center\">
    
<main class=\"form-signin\">
  <form method=\"POST\">
    <img class=\"mb-4\" src=\"../assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"72\" height=\"57\">
    <h1 class=\"h3 mb-3 fw-normal\">Please sign in</h1>

    <div class=\"form-floating\">
      <input type=\"email\" name=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
      <label for=\"floatingInput\">Email address</label>
    </div>
    <div class=\"form-floating\">
      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
      <label for=\"floatingPassword\">Password</label>
    </div>

    <div class=\"checkbox mb-3\">
      <label>
        <input type=\"checkbox\" value=\"remember-me\"> Remember me
      </label>
    </div>
    <button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/users/login.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/users/login.html", "/var/www/html/views/users/login.html");
    }
}
