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

/* user/uservue/search.html.twig */
class __TwigTemplate_fa1eb2f4c87f3ce6fc3bcad444aebc30 extends Template
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
        return "headeruser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/search.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/search.html.twig", 1);
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
        yield "

    <br>
    <div class=\"row justify-content-center\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            yield "        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"card h-100 product-card\">
                <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"images\" class=\"product-image\">
                <div class=\"card-body product-details\">
                    <h3>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13), "html", null, true);
            yield "</h3>
                    ";
            // line 14
            $context["aUnePromotion"] = false;
            // line 15
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 16
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16))) {
                    // line 17
                    yield "                            ";
                    $context["aUnePromotion"] = true;
                    // line 18
                    yield "                            ";
                    $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 19
                    yield "                            ";
                    $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 19), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 19, $this->source); })()), "U")) / (24 * 3600));
                    // line 20
                    yield "                            ";
                    if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 20, $this->source); })()) > 0)) {
                        // line 21
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 21, $this->source); })()), 0, "floor"), "html", null, true);
                        yield "</p>
                            ";
                    } else {
                        // line 23
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
                    }
                    // line 25
                    yield "                            <p class=\"btn-reduction\"> - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 25), "html", null, true);
                    yield " %</p>
                            <p style=\"font-size:80%\">A partir de :</p>
                            <p class=\"product-price original-price\">";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27), "html", null, true);
                    yield " €</p>
                            <p class=\"product-price remise-price\" style=\"color: red;\">";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28) * (1 - (CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 28) / 100))), "html", null, true);
                    yield " €</p>
                        ";
                }
                // line 30
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                    ";
            if ( !(isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 31, $this->source); })())) {
                // line 32
                yield "                        <p class=\"product-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32), "html", null, true);
                yield " €</p>
                    ";
            }
            // line 34
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Quantité disponible: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                </div>
                <div class=\"product-footer\">
                    ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38) > 0)) {
                // line 39
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_dans_panier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43)));
                foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                    // line 44
                    yield "                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["qty"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["qty"], "html", null, true);
                    yield "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qty'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                                </select>
                            </div>
                            <br>
                            <div class=\"d-flex justify-content-between\">
                                <div>
                                    <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"btn btn-details\" style=\"margin-top:0px !important;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
                                </div>
                                <div>
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    ";
            } else {
                // line 65
                yield "                        <p>Rupture de stock</p>
                    ";
            }
            // line 67
            yield "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "user/uservue/search.html.twig";
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
        return array (  227 => 71,  218 => 67,  214 => 65,  197 => 51,  190 => 46,  179 => 44,  175 => 43,  167 => 39,  165 => 38,  159 => 35,  154 => 34,  148 => 32,  145 => 31,  139 => 30,  134 => 28,  130 => 27,  124 => 25,  120 => 23,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  94 => 15,  92 => 14,  88 => 13,  83 => 11,  79 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block body %}


    <br>
    <div class=\"row justify-content-center\">
        {% for product in products %}
        <div class=\"col-md-6 col-lg-3 mb-4\">
            <div class=\"card h-100 product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"images\" class=\"product-image\">
                <div class=\"card-body product-details\">
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
                    <p class=\"card-text\">Quantité disponible: {{ product.quantity }}</p>
                </div>
                <div class=\"product-footer\">
                    {% if product.quantity > 0 %}
                        <form action=\"{{ path('add_dans_panier', {'id': product.id}) }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    {% for qty in 0..product.quantity %}
                                        <option value=\"{{ qty }}\">{{ qty }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <br>
                            <div class=\"d-flex justify-content-between\">
                                <div>
                                    <a href=\"{{ path('details_produit_user', {'id': product.id}) }}\" class=\"btn btn-details\" style=\"margin-top:0px !important;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
                                </div>
                                <div>
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    {% else %}
                        <p>Rupture de stock</p>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %}
", "user/uservue/search.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\user\\uservue\\search.html.twig");
    }
}
