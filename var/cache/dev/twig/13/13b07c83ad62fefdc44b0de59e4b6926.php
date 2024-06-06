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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <br><br>
    <div class=\"container nature\">
        <div class=\"row\">
            ";
        // line 7
        if (array_key_exists("product", $context)) {
            // line 8
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "images", [], "any", false, false, false, 10))), "html", null, true);
            yield "\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</h2>
                        <p>Prix: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "price", [], "any", false, false, false, 16), "html", null, true);
            yield " €</p>
                        <p>Quantité disponible: ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "quantity", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                        <p>Description:</p>
                        <p>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        } elseif (        // line 22
array_key_exists("promo", $context)) {
            // line 23
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 25, $this->source); })()), "images", [], "any", false, false, false, 25))), "html", null, true);
            yield "\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"promo-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</h2>
                        <p>Réduction: ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 31, $this->source); })()), "reduction", [], "any", false, false, false, 31), "html", null, true);
            yield "%</p>
                        <p>Date de début: ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>Date de fin: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 33, $this->source); })()), "dateFin", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>Prix après promotion: ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 34, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 34), "html", null, true);
            yield " €</p>
                        <p>Description:</p>
                        <p>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        }
        // line 40
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
        return array (  149 => 40,  142 => 36,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  113 => 25,  109 => 23,  107 => 22,  101 => 19,  96 => 17,  92 => 16,  88 => 15,  80 => 10,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

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
