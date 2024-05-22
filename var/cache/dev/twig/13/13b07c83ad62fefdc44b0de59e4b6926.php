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

/* user/uservue/indexproduit.html.twig */
class __TwigTemplate_65927ef89a1e0558a2c8ba9da89a0886 extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/indexproduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/indexproduit.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "user/uservue/indexproduit.html.twig", 1);
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

        yield "Détails du Produit ou de la Promotion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <br><br>
    <div class=\"container nature\">
        <div class=\"row\">
            ";
        // line 10
        if (array_key_exists("product", $context)) {
            // line 11
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "images", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</h2>
                        <p>Prix: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), "html", null, true);
            yield " €</p>
                        <p>Quantité disponible: ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "quantity", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                        <p>Description:</p>
                        <p>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        } elseif (        // line 25
array_key_exists("promo", $context)) {
            // line 26
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 28, $this->source); })()), "images", [], "any", false, false, false, 28))), "html", null, true);
            yield "\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"promo-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            yield "</h2>
                        <p>Réduction: ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 34, $this->source); })()), "reduction", [], "any", false, false, false, 34), "html", null, true);
            yield "%</p>
                        <p>Date de début: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 35, $this->source); })()), "dateDebut", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>Date de fin: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 36, $this->source); })()), "dateFin", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>Prix après promotion: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 37, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 37), "html", null, true);
            yield " €</p>
                        <p>Description:</p>
                        <p>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        }
        // line 43
        yield "            <a href=\"/\" class=\"btn btn-details\">< Retour</a>
        </div>
    </div>

    <script>
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); 
        });
    </script>
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
        return "user/uservue/indexproduit.html.twig";
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
        return array (  170 => 43,  163 => 39,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  134 => 28,  130 => 26,  128 => 25,  122 => 22,  117 => 20,  113 => 19,  109 => 18,  101 => 13,  97 => 11,  95 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Détails du Produit ou de la Promotion{% endblock %}


{% block body %}
    <br><br>
    <div class=\"container nature\">
        <div class=\"row\">
            {% if product is defined %}
                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details nature-card\">
                        <h2 class=\"card-title\">{{ product.name }}</h2>
                        <p>Prix: {{ product.price }} €</p>
                        <p>Quantité disponible: {{ product.quantity }}</p>
                        <p>Description:</p>
                        <p>{{ product.description }}</p>
                    </div>
                </div>
            {% elseif promo is defined %}
                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"{{ asset('images/' ~ promo.images) }}\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"promo-details nature-card\">
                        <h2 class=\"card-title\">{{ promo.name }}</h2>
                        <p>Réduction: {{ promo.reduction }}%</p>
                        <p>Date de début: {{ promo.dateDebut|date('d/m/Y') }}</p>
                        <p>Date de fin: {{ promo.dateFin|date('d/m/Y') }}</p>
                        <p>Prix après promotion: {{ promo.priceafterpromo }} €</p>
                        <p>Description:</p>
                        <p>{{ promo.description }}</p>
                    </div>
                </div>
            {% endif %}
            <a href=\"/\" class=\"btn btn-details\">< Retour</a>
        </div>
    </div>

    <script>
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); 
        });
    </script>
{% endblock %}
", "user/uservue/indexproduit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\indexproduit.html.twig");
    }
}
