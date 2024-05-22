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

/* admin/adminproducts/index.html.twig */
class __TwigTemplate_5f46d3f6e68a5ef584592a4b1553205c extends Template
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
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/index.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/index.html.twig", 1);
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

        yield "Page Accueil Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "
<div class=\"container\">
    <br>
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "        <div class=\"col-md-4 col-lg-4\">
            <div class=\"product-card\">
                <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" alt=\"une image\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</h3>
                    ";
            // line 16
            $context["aUnePromotion"] = false;
            // line 17
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 18
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 18))) {
                    // line 19
                    yield "                            ";
                    $context["aUnePromotion"] = true;
                    // line 20
                    yield "                            ";
                    $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 21
                    yield "                            ";
                    $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 21), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 21, $this->source); })()), "U")) / (24 * 3600));
                    // line 22
                    yield "                            ";
                    if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 22, $this->source); })()) > 0)) {
                        // line 23
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 23, $this->source); })()), 0, "floor"), "html", null, true);
                        yield "</p>
                            ";
                    } else {
                        // line 25
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
                    }
                    // line 27
                    yield "                            <p class=\"btn-reduction\"> - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 27), "html", null, true);
                    yield " %</p>
                            <p style=\"font-size:80%\">À partir de :</p>
                            <p class=\"product-price original-price\">";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29), "html", null, true);
                    yield " €</p>
                            <p class=\"product-price discounted-price\" style=\"color: red;\">";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "any", false, false, false, 30), "html", null, true);
                    yield " €</p>
                        ";
                }
                // line 32
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                    ";
            if ( !(isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 33, $this->source); })())) {
                // line 34
                yield "                        <p class=\"product-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34), "html", null, true);
                yield " €</p>
                    ";
            }
            // line 36
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                    <p class=\"product-quantity\">Quantité disponible: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                    
                    <form action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_quantity", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" method=\"post\" class=\"mb-3\">
                        <div class=\"input-group\">
                            <label for=\"add_quantity\" class=\"input-group-text\">Ajouter Quantité:</label>
                            <input type=\"number\" id=\"add_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                        </div>
                    </form>

                    <form action=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_quantity", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" method=\"post\">
                        <div class=\"input-group\">
                            <label for=\"remove_quantity\" class=\"input-group-text\">Retirer Quantité:</label>
                            <input type=\"number\" id=\"remove_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "    </div>
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
        return "admin/adminproducts/index.html.twig";
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
        return array (  213 => 58,  196 => 47,  185 => 39,  180 => 37,  175 => 36,  169 => 34,  166 => 33,  160 => 32,  155 => 30,  151 => 29,  145 => 27,  141 => 25,  135 => 23,  132 => 22,  129 => 21,  126 => 20,  123 => 19,  120 => 18,  115 => 17,  113 => 16,  109 => 15,  104 => 13,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Page Accueil Admin{% endblock %}

{% block body %}

<div class=\"container\">
    <br>
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        {% for product in products %}
        <div class=\"col-md-4 col-lg-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"une image\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>{{ product.name }}</h3>
                    {% set aUnePromotion = false %}
                    {% for promo in promotions %}
                        {% if promo.idproduct.id == product.id %}
                            {% set aUnePromotion = true %}
                            {% set aujourdhui = 'now'|date('Y-m-d') %}
                            {% set joursRest = (promo.dateFin|date('U') - aujourdhui|date('U')) / (24 * 3600) %}
                            {% if joursRest > 0 %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): {{ joursRest|round(0, 'floor') }}</p>
                            {% else %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            {% endif %}
                            <p class=\"btn-reduction\"> - {{ promo.reduction }} %</p>
                            <p style=\"font-size:80%\">À partir de :</p>
                            <p class=\"product-price original-price\">{{ product.price }} €</p>
                            <p class=\"product-price discounted-price\" style=\"color: red;\">{{ promo.getPriceafterpromo }} €</p>
                        {% endif %}
                    {% endfor %}
                    {% if not aUnePromotion %}
                        <p class=\"product-price\">{{ product.price }} €</p>
                    {% endif %}
                    <p>{{ product.description }}</p>
                    <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    
                    <form action=\"{{ path('add_quantity', {'productId': product.id}) }}\" method=\"post\" class=\"mb-3\">
                        <div class=\"input-group\">
                            <label for=\"add_quantity\" class=\"input-group-text\">Ajouter Quantité:</label>
                            <input type=\"number\" id=\"add_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                        </div>
                    </form>

                    <form action=\"{{ path('remove_quantity', {'productId': product.id}) }}\" method=\"post\">
                        <div class=\"input-group\">
                            <label for=\"remove_quantity\" class=\"input-group-text\">Retirer Quantité:</label>
                            <input type=\"number\" id=\"remove_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %}
", "admin/adminproducts/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\index.html.twig");
    }
}