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

/* user/uservue/indexpanier.html.twig */
class __TwigTemplate_3da395361a2bddd56b721cd30a85af51 extends Template
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
        return "headeruser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/indexpanier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/indexpanier.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/indexpanier.html.twig", 1);
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

        yield "Votre panier";
        
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<br><br><br>

<div class=\"container nature-theme\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <h1 class=\"mt-4 mb-4\">Votre Panier</h1>
            <br>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panierDetail"]) {
            // line 18
            yield "                <div class=\"row mb-4  row-with-margin-bottom\">
                    <div class=\"col-md-3\">
                        ";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "images", [], "array", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "images", [], "array", false, false, false, 20)))) {
                // line 21
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "images", [], "array", false, false, false, 21))), "html", null, true);
                yield "\" alt=\"image\" class=\"img-fluid card-img\">
                        ";
            } else {
                // line 23
                yield "                            <p>No image available</p>
                        ";
            }
            // line 25
            yield "                    </div>
                    <div class=\"col-md-9 card-details\">
                        <div>
                            ";
            // line 28
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "promo", [], "array", false, false, false, 28))) {
                // line 29
                yield "                                <h5>";
                (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "promo", [], "array", false, true, false, 29), "getDescription", [], "method", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "promo", [], "array", false, true, false, 29), "getDescription", [], "method", false, false, false, 29)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "promo", [], "array", false, true, false, 29), "getDescription", [], "method", false, false, false, 29), "html", null, true)) : (yield "No description available"));
                yield "</h5>
                                <p>Promotion</p>
                            ";
            } else {
                // line 32
                yield "                                <h5>";
                (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 32)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 32), "html", null, true)) : (yield "No name available"));
                yield "</h5>
                                <p>";
                // line 33
                (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "description", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "description", [], "array", false, false, false, 33)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "description", [], "array", false, false, false, 33), "html", null, true)) : (yield "No description available"));
                yield "</p>
                                <p>";
                // line 34
                (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "category", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "category", [], "array", false, false, false, 34)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "category", [], "array", false, false, false, 34), "html", null, true)) : (yield "No category available"));
                yield "</p>
                            ";
            }
            // line 36
            yield "                        </div>
                        <div class=\"card-price\">
                            <p>";
            // line 38
            (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", false, false, false, 38)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", false, false, false, 38), "html", null, true)) : (yield "No price available"));
            yield " €/unité</p>
                            ";
            // line 39
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "promo", [], "array", false, false, false, 39))) {
                // line 40
                yield "                                <p>Prix après promo: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", false, false, false, 40), "html", null, true);
                yield " €</p>
                                <p>Réduction: ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "reduction", [], "array", false, false, false, 41), "html", null, true);
                yield " %</p>
                            ";
            }
            // line 43
            yield "                        </div>

                        <div class=\"right-align\">
                            <form method=\"POST\" action=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_cart");
            yield "\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"panierId\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "id", [], "array", false, false, false, 47), "html", null, true);
            yield "\">
                                <a href=\"#\" class=\"delete-link\" onclick=\"this.parentNode.submit(); return false;\">Supprimer</a>
                            </form>
                            <form method=\"POST\" action=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_quantity");
            yield "\" class=\"quantity-form\">
                                <input type=\"hidden\" name=\"panierId\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "id", [], "array", false, false, false, 51), "html", null, true);
            yield "\">
                                    <div class=\"card-actions\">
                                        <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm quantity-btn add\">+</button>
                                        <p class=\"quantity-text\">Quantité: ";
            // line 54
            (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "array", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "array", false, false, false, 54)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "array", false, false, false, 54), "html", null, true)) : (yield "No quantity available"));
            yield "</p>
                                        <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm quantity-btn subtract\">-</button>
                                    </div>
                            </form>
                            <p>Sous-total: ";
            // line 58
            (((CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "array", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "array", false, false, false, 58)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "array", false, false, false, 58), "html", null, true)) : (yield "No subtotal available"));
            yield "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panierDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            <div class=\"justify-content-end mb-4\" style=\"text-align: end;\">
                <div class=\"col\">
                    <p>Nombre d'articles: ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 65, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-lg-2\">
                    <h3>Prix total: ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 68, $this->source); })()), "html", null, true);
        yield " €</h3>
                    <button type=\"button\" class=\"btn btn-details\">Valider mon panier</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
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
        return "user/uservue/indexpanier.html.twig";
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
        return array (  245 => 68,  239 => 65,  235 => 63,  224 => 58,  217 => 54,  211 => 51,  207 => 50,  201 => 47,  197 => 46,  192 => 43,  187 => 41,  182 => 40,  180 => 39,  176 => 38,  172 => 36,  167 => 34,  163 => 33,  158 => 32,  151 => 29,  149 => 28,  144 => 25,  140 => 23,  134 => 21,  132 => 20,  128 => 18,  124 => 17,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
<br><br><br>

<div class=\"container nature-theme\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <h1 class=\"mt-4 mb-4\">Votre Panier</h1>
            <br>
            {% for panierDetail in panierDetails %}
                <div class=\"row mb-4  row-with-margin-bottom\">
                    <div class=\"col-md-3\">
                        {% if panierDetail['images'] is defined and panierDetail['images'] is not null %}
                            <img src=\"{{ asset('images/' ~ panierDetail['images']) }}\" alt=\"image\" class=\"img-fluid card-img\">
                        {% else %}
                            <p>No image available</p>
                        {% endif %}
                    </div>
                    <div class=\"col-md-9 card-details\">
                        <div>
                            {% if panierDetail['promo'] is not null %}
                                <h5>{{ panierDetail['promo'].getDescription() ?? 'No description available' }}</h5>
                                <p>Promotion</p>
                            {% else %}
                                <h5>{{ panierDetail['name'] ?? 'No name available' }}</h5>
                                <p>{{ panierDetail['description'] ?? 'No description available' }}</p>
                                <p>{{ panierDetail['category'] ?? 'No category available' }}</p>
                            {% endif %}
                        </div>
                        <div class=\"card-price\">
                            <p>{{ panierDetail['price'] ?? 'No price available' }} €/unité</p>
                            {% if panierDetail['promo'] is not null %}
                                <p>Prix après promo: {{ panierDetail['price'] }} €</p>
                                <p>Réduction: {{ panierDetail['reduction'] }} %</p>
                            {% endif %}
                        </div>

                        <div class=\"right-align\">
                            <form method=\"POST\" action=\"{{ path('remove_from_cart') }}\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"panierId\" value=\"{{ panierDetail['id'] }}\">
                                <a href=\"#\" class=\"delete-link\" onclick=\"this.parentNode.submit(); return false;\">Supprimer</a>
                            </form>
                            <form method=\"POST\" action=\"{{ path('update_quantity') }}\" class=\"quantity-form\">
                                <input type=\"hidden\" name=\"panierId\" value=\"{{ panierDetail['id'] }}\">
                                    <div class=\"card-actions\">
                                        <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm quantity-btn add\">+</button>
                                        <p class=\"quantity-text\">Quantité: {{ panierDetail['quantity'] ?? 'No quantity available' }}</p>
                                        <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm quantity-btn subtract\">-</button>
                                    </div>
                            </form>
                            <p>Sous-total: {{ panierDetail['subtotal'] ?? 'No subtotal available' }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
            <div class=\"justify-content-end mb-4\" style=\"text-align: end;\">
                <div class=\"col\">
                    <p>Nombre d'articles: {{ panierDetails|length }}</p>
                </div>
                <div class=\"col-lg-2\">
                    <h3>Prix total: {{ totalPrice }} €</h3>
                    <button type=\"button\" class=\"btn btn-details\">Valider mon panier</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
{% endblock %}
", "user/uservue/indexpanier.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\indexpanier.html.twig");
    }
}
