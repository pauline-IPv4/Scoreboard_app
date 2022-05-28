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

/* ici_test/array.html.twig */
class __TwigTemplate_9c434c8febc991bbcbc69d4af5b95ca5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ici_test/array.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ici_test/array.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ici_test/array.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table>
        <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "html", null, true);
        echo "</d>
        <td>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 5, $this->source); })()), 1, [], "array", false, false, false, 5), "html", null, true);
        echo "</d>
        <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 6, $this->source); })()), 2, [], "array", false, false, false, 6), "html", null, true);
        echo "</d>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 7, $this->source); })()), 3, [], "array", false, false, false, 7), "html", null, true);
        echo "</d>
    </table>
<br><br>
<table class=\"table table-bordered table-striped\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 11, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "    <tr>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 13, $this->source); })()), $context["i"], [], "array", false, false, false, 13), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
<br><br>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 19
            echo "    ";
            echo twig_escape_filter($this->env, $context["char"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "<br><br>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 24
            echo "    ";
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["indice"] => $context["valeur"]) {
            // line 28
            echo "    <p>";
            echo twig_escape_filter($this->env, $context["indice"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "</p>
    <p>";
            // line 29
            echo twig_escape_filter($this->env, $context["indice"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 29, $this->source); })()), $context["indice"], [], "array", false, false, false, 29), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['indice'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ici_test/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  153 => 29,  146 => 28,  142 => 27,  139 => 26,  130 => 24,  126 => 23,  123 => 21,  114 => 19,  110 => 18,  106 => 16,  97 => 13,  94 => 12,  90 => 11,  83 => 7,  79 => 6,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <table>
        <td>{{ array[0] }}</d>
        <td>{{ array[1] }}</d>
        <td>{{ array[2] }}</d>
        <td>{{ array[3] }}</d>
    </table>
<br><br>
<table class=\"table table-bordered table-striped\">
{% for i in 0..array|length - 1 %}
    <tr>
        <td>{{ array[i]}}</td>
    </tr>
{% endfor %}
</table>
<br><br>
{% for char in 'a'..'z' %}
    {{ char }}
{% endfor %}
<br><br>
{# Equivalent de la boucle PHP ForEach (\$tableau as \$valeur)} #}
{% for valeur in array %}
    {{ valeur }}
{% endfor %}

{% for indice, valeur in array %}
    <p>{{indice}} : {{valeur}}</p>
    <p>{{indice}} : {{array[indice]}}</p>
{% endfor %}
  
{% endblock %}
", "ici_test/array.html.twig", "/Applications/MAMP/htdocs/myscoreboard/templates/ici_test/array.html.twig");
    }
}
