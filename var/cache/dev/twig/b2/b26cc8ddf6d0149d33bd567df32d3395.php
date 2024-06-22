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

/* admin/loyalty_card/edit.html.twig */
class __TwigTemplate_c0862a968f942e7f55e3e3948f4c90e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/loyalty_card/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/loyalty_card/edit.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/loyalty_card/edit.html.twig", 1);
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

        yield "Edit LoyaltyCard";
        
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
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            border-radius: 2%;
            border-color:#000;
            margin-top:3%;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-group .btn {
            margin-right: 10px;
        }
        .btn-group form {
            display: inline-block;
        }
        .container input[type=text],
        .container input[type=date],
        .container textarea,
        .container select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container select {
            background-color: #f8f8f8;
        }
        .promo-admin-detail-btn-back {
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            padding: 10px 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-right: 5px;
            display: inline-block;
            width: 80%;
            height: fit-content;
            margin-top: 2%;
        }
        .promo-admin-detail-btn-back:hover {
            background-color: #fff;
            color: #0056b3;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 65
        yield "    <div class=\"container\">
        <h1>Modifier une carte de fidélité</h1>

        ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'widget');
        yield "
        </div>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_index");
        yield "\" class=\"btn btn-details\">< Retour</a>

        <button class=\"btn btn-details\">Editer la carte</button>

        ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
                <form method=\"post\" action=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer la carte?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80))), "html", null, true);
        yield "\">
            <button class=\"btn btn-details\">Supprimer la carte</button>
        </form>
        </div>
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
        return "admin/loyalty_card/edit.html.twig";
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
        return array (  202 => 80,  198 => 79,  194 => 78,  187 => 74,  180 => 70,  175 => 68,  170 => 65,  160 => 64,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Edit LoyaltyCard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            border-radius: 2%;
            border-color:#000;
            margin-top:3%;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-group .btn {
            margin-right: 10px;
        }
        .btn-group form {
            display: inline-block;
        }
        .container input[type=text],
        .container input[type=date],
        .container textarea,
        .container select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container select {
            background-color: #f8f8f8;
        }
        .promo-admin-detail-btn-back {
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            padding: 10px 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-right: 5px;
            display: inline-block;
            width: 80%;
            height: fit-content;
            margin-top: 2%;
        }
        .promo-admin-detail-btn-back:hover {
            background-color: #fff;
            color: #0056b3;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Modifier une carte de fidélité</h1>

        {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_widget(form) }}
        </div>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

        <a href=\"{{ path('app_loyalty_card_index') }}\" class=\"btn btn-details\">< Retour</a>

        <button class=\"btn btn-details\">Editer la carte</button>

        {{ form_end(form) }}
                <form method=\"post\" action=\"{{ path('app_loyalty_card_delete', {'id': loyalty_card.id}) }}\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer la carte?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ loyalty_card.id) }}\">
            <button class=\"btn btn-details\">Supprimer la carte</button>
        </form>
        </div>
    </div>
{% endblock %}
", "admin/loyalty_card/edit.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\loyalty_card\\edit.html.twig");
    }
}
