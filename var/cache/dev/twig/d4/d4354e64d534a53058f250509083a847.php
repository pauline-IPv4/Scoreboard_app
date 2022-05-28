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

/* admin/user/index.html.twig */
class __TwigTemplate_8986b5db7de2ba1407f1ae9357376d3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pseudo</th>
                <th>Roles</th>
                <th>Email</th>
                <th>Password</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <tr>

            ";
            // line 26
            echo "
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                ";
            // line 32
            echo "                <td>
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 34
                echo "                    ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 35
                    echo "                        Administrateur
                    ";
                } elseif ((                // line 36
$context["role"] == "ROLE_PLAYER")) {
                    // line 37
                    echo "                        Joueur
                    ";
                } elseif ((                // line 38
$context["role"] == "ROLE_REFEREE")) {
                    // line 39
                    echo "                        Arbitre
                    ";
                } else {
                    // line 41
                    echo "                        Utilisateur
                    ";
                }
                // line 43
                echo "                    ";
                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43)) ? ("|") : (""));
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo " 
                </td>
                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["user"], "player", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "player", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true))) : (print ("")));
            echo "</td>
                <td> **************************************** </td>
                <td>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo " 
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo " 
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_new");
        echo "\" class=\"btn btn-primary\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 61,  215 => 57,  205 => 53,  196 => 50,  192 => 49,  186 => 46,  182 => 44,  165 => 43,  161 => 41,  157 => 39,  155 => 38,  152 => 37,  150 => 36,  147 => 35,  144 => 34,  127 => 33,  124 => 32,  120 => 28,  116 => 27,  113 => 26,  109 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pseudo</th>
                <th>Roles</th>
                <th>Email</th>
                <th>Password</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>

            {# EXO : Afficher les rôles en les remplaçant par administrateur 
            pour le ROLE_ADMIN, joueur pour le ROLE_PLAYER, arbitre pour le ROLE_REFEREE, 
            utilisateur poue le ROLE_USER #}

                <td>{{ user.id }}</td>
                <td>{{ user.pseudo }}</td>
                {#
                <td>{{ user.roles ? user.roles|json_encode : '' }}
                #}
                <td>
                {% for role in user.roles %}
                    {% if role == 'ROLE_ADMIN' %}
                        Administrateur
                    {% elseif role == 'ROLE_PLAYER' %}
                        Joueur
                    {% elseif role == 'ROLE_REFEREE' %}
                        Arbitre
                    {% else %}
                        Utilisateur
                    {% endif %}
                    {{ not loop.last ? '|' : '' }}
                {% endfor %} 
                </td>
                <td>{{ user.player ? user.player.email : \"\"  }}</td>
                <td> **************************************** </td>
                <td>
                    <a href=\"{{ path('app_admin_user_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('app_admin_user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
            {% else %} 
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %} 
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_user_new') }}\" class=\"btn btn-primary\">Create new</a>
{% endblock %}

{#

EXO : lors de l'inscription, créer un nouveau User et un nouveau 
Player qui seront relié (dans la BDD le champ user.player_id vaudra player.id)

!! CHECK RegistrationController

- \$player = new Player;
//set \$player properties
    - \$player->setNickname(\$user->getPseudo());
    - \$player->setEmail(\"onsenfou@yopmail.com\");
//link user && player
    - \$user->setPlayer(\$player)

#}", "admin/user/index.html.twig", "/Applications/MAMP/htdocs/myscoreboard/templates/admin/user/index.html.twig");
    }
}
