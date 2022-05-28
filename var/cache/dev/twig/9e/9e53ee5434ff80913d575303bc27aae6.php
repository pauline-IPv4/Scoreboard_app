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

/* admin/game/_card.html.twig */
class __TwigTemplate_1d2f58635c422c7a316679e6f2b5e6fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/game/_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/game/_card.html.twig"));

        // line 1
        echo "<div class=\"card\" style=\"\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h5>
        <h6 class=\"card-subtitle mb-2 text-muted\">Nb parties jouées : ";
        // line 4
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 4, $this->source); })()), "contests", [], "any", false, false, false, 4)), "html", null, true);
        echo "</h6>
        <p class=\"card-text\">
            Entre ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 6, $this->source); })()), "minPlayers", [], "any", false, false, false, 6), "html", null, true);
        echo " et ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 6, $this->source); })()), "maxPlayers", [], "any", false, false, false, 6), "html", null, true);
        echo " joueurs
        </p>
        <p> Ayant déjà joué : 
           ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 9, $this->source); })()), "contests", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["partie"]) {
            // line 10
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["partie"], "players", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                // line 11
                echo "                   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nickname", [], "any", false, false, false, 11), "html", null, true);
                echo ",
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_contest", ["title" => twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"card-link\">Commencer une partie</a>
        ";
        // line 17
        echo "    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/game/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  91 => 15,  82 => 13,  73 => 11,  68 => 10,  64 => 9,  56 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" style=\"\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ game.title }}</h5>
        <h6 class=\"card-subtitle mb-2 text-muted\">Nb parties jouées : {{ game.contests|length }}</h6>
        <p class=\"card-text\">
            Entre {{ game.minPlayers }} et {{ game.maxPlayers }} joueurs
        </p>
        <p> Ayant déjà joué : 
           {% for partie in game.contests %}
               {% for joueur in partie.players %}
                   {{ joueur.nickname }},
               {% endfor %}
           {% endfor %} 
        </p>
        <a href=\"{{ path('app_home_contest', {title: game.title}) }}\" class=\"card-link\">Commencer une partie</a>
        {# <a href=\"#\" class=\"card-link\">Another link</a> #}
    </div>
</div>", "admin/game/_card.html.twig", "/Applications/MAMP/htdocs/myscoreboard/templates/admin/game/_card.html.twig");
    }
}
