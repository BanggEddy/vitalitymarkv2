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

/* admin/adminproducts/categorie.html.twig */
class __TwigTemplate_70786fb9bf8f870cda0db8d54406a38f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/categorie.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/categorie.html.twig", 1);
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

        yield "Les catégories";
        
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
        yield "<div class=\"container\">
    <br>
    ";
        // line 8
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "        <p style=\"text-align: center; font-size: 300%\">Pas de produit pour cette catégorie.</p>
    ";
        } else {
            // line 11
            yield "        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                yield "            <div class=\"col-md-4 col-lg-4\">
                <div class=\"product-card\">
                    <img src=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 15))), "html", null, true);
                yield "\" alt=\"images\" class=\"product-image\">
                    <div class=\"product-details\">
                        <h3>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "</h3>
                        ";
                // line 18
                $context["aUnePromotion"] = false;
                // line 19
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                    // line 20
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20))) {
                        // line 21
                        yield "                                ";
                        $context["aUnePromotion"] = true;
                        // line 22
                        yield "                                ";
                        $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                        // line 23
                        yield "                                ";
                        $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 23), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 23, $this->source); })()), "U")) / (24 * 3600));
                        // line 24
                        yield "                                ";
                        if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 24, $this->source); })()) > 0)) {
                            // line 25
                            yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 25, $this->source); })()), 0, "floor"), "html", null, true);
                            yield "</p>
                                ";
                        } else {
                            // line 27
                            yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                ";
                        }
                        // line 29
                        yield "                                <p class=\"btn-reduction\"> - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 29), "html", null, true);
                        yield " %</p>
                                <p style=\"font-size:80%\">A partir de :</p>
                                <p class=\"product-price original-price\">";
                        // line 31
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31), "html", null, true);
                        yield " €</p>
                                <p class=\"product-price remise-price\" style=\"color: red;\">";
                        // line 32
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32) * (1 - (CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 32) / 100))), "html", null, true);
                        yield " €</p>
                            ";
                    }
                    // line 34
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                        ";
                if ( !(isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 35, $this->source); })())) {
                    // line 36
                    yield "                            <p class=\"product-price\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36), "html", null, true);
                    yield " €</p>
                        ";
                }
                // line 38
                yield "                        <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 38), "html", null, true);
                yield "</p>
                        <p class=\"product-quantity\">Quantité disponible: ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                yield "</p>
                        
                        <form action=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_quantity", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" method=\"post\" class=\"mb-3\">
                            <div class=\"input-group\">
                                <label for=\"add_quantity\" class=\"input-group-text\">Ajouter Quantité:</label>
                                <input type=\"number\" id=\"add_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                                <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                            </div>
                        </form>

                        <form action=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_quantity", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49)]), "html", null, true);
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
            // line 60
            yield "        </div>
    ";
        }
        // line 62
        yield "</div>

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
        return "admin/adminproducts/categorie.html.twig";
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
        return array (  224 => 62,  220 => 60,  203 => 49,  192 => 41,  187 => 39,  182 => 38,  176 => 36,  173 => 35,  167 => 34,  162 => 32,  158 => 31,  152 => 29,  148 => 27,  142 => 25,  139 => 24,  136 => 23,  133 => 22,  130 => 21,  127 => 20,  122 => 19,  120 => 18,  116 => 17,  111 => 15,  107 => 13,  103 => 12,  100 => 11,  96 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Les catégories{% endblock %}

{% block body %}
<div class=\"container\">
    <br>
    {% if products is empty %}
        <p style=\"text-align: center; font-size: 300%\">Pas de produit pour cette catégorie.</p>
    {% else %}
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
            {% for product in products %}
            <div class=\"col-md-4 col-lg-4\">
                <div class=\"product-card\">
                    <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"images\" class=\"product-image\">
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
                                <p style=\"font-size:80%\">A partir de :</p>
                                <p class=\"product-price original-price\">{{ product.price }} €</p>
                                <p class=\"product-price remise-price\" style=\"color: red;\">{{ product.price * (1 - (promo.reduction / 100)) }} €</p>
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
    {% endif %}
</div>

{% endblock %}
", "admin/adminproducts/categorie.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\adminproducts\\categorie.html.twig");
    }
}
