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

/* admin/contest/show.html.twig */
class __TwigTemplate_549034f0c95fa0a07d02f5daf25fe373 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contest/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contest/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/contest/show.html.twig", 1);
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

        echo "Contest";
        
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
        echo "    <h1>Contest</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>";
        // line 15
        ((twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 15, $this->source); })()), "startDate", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 15, $this->source); })()), "startDate", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Joueurs</th>
                <td>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Nickname</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 29, $this->source); })()), "players", [], "any", false, false, false, 29));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 30
            echo "                            <tr>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nickname", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contest_index");
        echo "\">back to list</a>
    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contest_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">edit</a>
    ";
        // line 49
        echo twig_include($this->env, $context, "admin/contest/_delete_form.html.twig");
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/contest/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  165 => 48,  161 => 47,  152 => 40,  143 => 36,  135 => 33,  131 => 32,  127 => 31,  124 => 30,  119 => 29,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contest{% endblock %}

{% block body %}
    <h1>Contest</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contest.id }}</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>{{ contest.startDate ? contest.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Joueurs</th>
                <td>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Nickname</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for player in contest.players %}
                            <tr>
                                <td>{{ player.id }}</td>
                                <td>{{ player.email }}</td>
                                <td>{{ player.nickname }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_contest_index') }}\">back to list</a>
    <a href=\"{{ path('app_admin_contest_edit', {'id': contest.id}) }}\">edit</a>
    {{ include('admin/contest/_delete_form.html.twig') }}
    
{% endblock %}
", "admin/contest/show.html.twig", "/Applications/MAMP/htdocs/myscoreboard/templates/admin/contest/show.html.twig");
    }
}
