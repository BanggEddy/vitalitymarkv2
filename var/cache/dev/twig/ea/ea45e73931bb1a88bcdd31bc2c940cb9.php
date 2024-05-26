<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/loyalty_card/show.html.twig */
class __TwigTemplate_d2de7a49e0bde719c1cb6e739208d5cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/loyalty_card/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/loyalty_card/show.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/loyalty_card/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "LoyaltyCard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .container {
            max-width: 500px;
            margin: 3% auto;
            padding: 20px;
            border-radius: 2%;
            background-color: #fff;
            border: 1px solid #000;
        }

        .loyalty-card h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .loyalty-card table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .loyalty-card th,
        .loyalty-card td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .loyalty-card tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .loyalty-card .table .table {
            background-color: #fff;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        yield "    <div class=\"container loyalty-card\">
        <h1>Les détails de la carte: </h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Numéro de carte</th>
                    <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 55, $this->source); })()), "cardNumber", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Type de carte</th>
                    <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 59, $this->source); })()), "cardType", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Points</th>
                    <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 63, $this->source); })()), "points", [], "any", false, false, false, 63), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Les offres personnalisées</th>
                    <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 67, $this->source); })()), "personalizedOffer", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <ul style=\"list-style-type: none; padding: 0; margin: 0;\">
            <li style=\"display: inline-block; margin-right: 10px;\">
                <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_index");
        yield "\" class=\"btn btn-details\">< Retour</a>
            </li>
            <li style=\"display: inline-block; margin-right: 10px;\">
                <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"btn btn-details\">Editer</a>
            </li>
            <li style=\"display: inline-block;\">
                <form method=\"post\" action=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer la carte?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81))), "html", null, true);
        yield "\">
                    <button class=\"btn btn-details\">Supprimer</button>
                </form>
            </li>
        </ul>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/loyalty_card/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  209 => 81,  205 => 80,  199 => 77,  193 => 74,  183 => 67,  176 => 63,  169 => 59,  162 => 55,  153 => 48,  143 => 47,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}LoyaltyCard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .container {
            max-width: 500px;
            margin: 3% auto;
            padding: 20px;
            border-radius: 2%;
            background-color: #fff;
            border: 1px solid #000;
        }

        .loyalty-card h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .loyalty-card table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .loyalty-card th,
        .loyalty-card td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .loyalty-card tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .loyalty-card .table .table {
            background-color: #fff;
        }

    </style>
{% endblock %}

{% block body %}
    <div class=\"container loyalty-card\">
        <h1>Les détails de la carte: </h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Numéro de carte</th>
                    <td>{{ loyalty_card.cardNumber }}</td>
                </tr>
                <tr>
                    <th>Type de carte</th>
                    <td>{{ loyalty_card.cardType }}</td>
                </tr>
                <tr>
                    <th>Points</th>
                    <td>{{ loyalty_card.points }}</td>
                </tr>
                <tr>
                    <th>Les offres personnalisées</th>
                    <td>{{ loyalty_card.personalizedOffer }}</td>
                </tr>
            </tbody>
        </table>

        <ul style=\"list-style-type: none; padding: 0; margin: 0;\">
            <li style=\"display: inline-block; margin-right: 10px;\">
                <a href=\"{{ path('app_loyalty_card_index') }}\" class=\"btn btn-details\">< Retour</a>
            </li>
            <li style=\"display: inline-block; margin-right: 10px;\">
                <a href=\"{{ path('app_loyalty_card_edit', {'id': loyalty_card.id}) }}\" class=\"btn btn-details\">Editer</a>
            </li>
            <li style=\"display: inline-block;\">
                <form method=\"post\" action=\"{{ path('app_loyalty_card_delete', {'id': loyalty_card.id}) }}\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer la carte?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ loyalty_card.id) }}\">
                    <button class=\"btn btn-details\">Supprimer</button>
                </form>
            </li>
        </ul>

    </div>
{% endblock %}
", "admin/loyalty_card/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\loyalty_card\\show.html.twig");
    }
}
