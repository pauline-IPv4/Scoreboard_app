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

/* menu.html.twig */
class __TwigTemplate_96fd177221b87a11f22a5b22cb346cad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">My Scoreboard</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "pseudo", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-sign-in\"></i></a>
      </li>
    ";
        } else {
            // line 17
            echo "      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i></a>
      </li>

      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-user-plus\"></i></a>
      </li>
    ";
        }
        // line 25
        echo "
<!-- check droits/rôles pour gérer aff. -->
    ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Jeux
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_game");
            echo "\">Liste</a>
          <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_game_new");
            echo "\">Ajouter un jeu</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Joueurs
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_player_index");
            echo "\">Liste</a>
          <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_player_new");
            echo "\">Ajouter un joueur</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Parties
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contest_index");
            echo "\">Liste</a>
          <a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contest_new");
            echo "\">Ajouter une partie</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Utilisateurs
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_index");
            echo "\">Liste</a>
          <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_new");
            echo "\">Ajouter</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
    ";
        }
        // line 69
        echo "    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  156 => 64,  152 => 63,  140 => 54,  136 => 53,  124 => 44,  120 => 43,  108 => 34,  104 => 33,  97 => 28,  95 => 27,  91 => 25,  85 => 22,  78 => 18,  75 => 17,  69 => 14,  61 => 11,  58 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">My Scoreboard</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
    {% if app.user %}
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">{{ app.user.pseudo }}</a>
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('app_login') }}\"><i class=\"fa fa-sign-in\"></i></a>
      </li>
    {% else %}
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out\"></i></a>
      </li>

      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('app_register') }}\"><i class=\"fa fa-user-plus\"></i></a>
      </li>
    {% endif %}

<!-- check droits/rôles pour gérer aff. -->
    {% if is_granted(\"ROLE_ADMIN\") %}
       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Jeux
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_game') }}\">Liste</a>
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_game_new') }}\">Ajouter un jeu</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Joueurs
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_player_index') }}\">Liste</a>
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_player_new') }}\">Ajouter un joueur</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Parties
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_contest_index') }}\">Liste</a>
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_contest_new') }}\">Ajouter une partie</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
       <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Utilisateurs
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_user_index') }}\">Liste</a>
          <a class=\"dropdown-item\" href=\"{{ path('app_admin_user_new') }}\">Ajouter</a>
          <div class=\"dropdown-divider\"></div>
        </div>
      </li>
    {% endif %}
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>", "menu.html.twig", "/Applications/MAMP/htdocs/myscoreboard/templates/menu.html.twig");
    }
}
