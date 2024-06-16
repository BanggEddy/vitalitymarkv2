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
            <h1>Votre Panier</h1>
            <br>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 18
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["panier"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                yield "                <div class=\"row bgdupanieritem\">
                    <div class=\"col-md-3\">
                        ";
                // line 21
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "array", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "array", false, false, false, 21)))) {
                    // line 22
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "array", false, false, false, 22))), "html", null, true);
                    yield "\" alt=\"image\" class=\"img-fluid card-img\">
                        ";
                } else {
                    // line 24
                    yield "                            <p>image pas trouvé</p>
                        ";
                }
                // line 26
                yield "                    </div>
                    <div class=\"col-md-9 card-details\">
                        <div>
                            ";
                // line 29
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promo", [], "array", false, false, false, 29))) {
                    // line 30
                    yield "                                <p> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 30), "html", null, true);
                    yield " </p>
                                <h5>";
                    // line 31
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promo", [], "array", false, true, false, 31), "getDescription", [], "method", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promo", [], "array", false, true, false, 31), "getDescription", [], "method", false, false, false, 31)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promo", [], "array", false, true, false, 31), "getDescription", [], "method", false, false, false, 31), "html", null, true)) : (yield "Trouve pas de description"));
                    yield "</h5>
                                <p>Promotion</p>
                            ";
                } else {
                    // line 34
                    yield "                                <h5>";
                    (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 34)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 34), "html", null, true)) : (yield "Trouve pas de name"));
                    yield "</h5>
                                <p>";
                    // line 35
                    (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "array", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "array", false, false, false, 35)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "array", false, false, false, 35), "html", null, true)) : (yield "Trouve pas de description"));
                    yield "</p>
                                <p>";
                    // line 36
                    (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "array", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "array", false, false, false, 36)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "array", false, false, false, 36), "html", null, true)) : (yield "Trouve pas de category"));
                    yield "</p>
                            ";
                }
                // line 38
                yield "                        </div>
                        <div class=\"card-price\">
                            ";
                // line 40
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promo", [], "array", false, false, false, 40))) {
                    // line 41
                    yield "                                <p style=\"color: red\">Prix après réduction: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "array", false, false, false, 41), "html", null, true);
                    yield " €/u</p>
                                <p  style=\"color: red\">-";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reduction", [], "array", false, false, false, 42), "html", null, true);
                    yield " %</p>
                            ";
                }
                // line 44
                yield "                        </div>

                        <div>
                            <form method=\"POST\" action=\"";
                // line 47
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enleverproduit_fromcart");
                yield "\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"panierItemId\" value=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "array", false, false, false, 48), "html", null, true);
                yield "\">
                                <a href=\"#\" class=\"delete-link\" onclick=\"this.parentNode.submit(); return false;\">Supprimer</a>
                            </form>
                            <form method=\"POST\" action=\"";
                // line 51
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_quantity");
                yield "\" class=\"quantity-form\">
                                <input type=\"hidden\" name=\"panierItemId\" value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "array", false, false, false, 52), "html", null, true);
                yield "\">
                                <div class=\"card-actions\">
                                    <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm quantity-btn add\">+</button>
                                    <p class=\"quantity-text\">Quantité: ";
                // line 55
                (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "array", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "array", false, false, false, 55)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "array", false, false, false, 55), "html", null, true)) : (yield "No quantity available"));
                yield "</p>
                                    <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm quantity-btn subtract\">-</button>
                                </div>
                            </form>
                            <p>Sous-total: ";
                // line 59
                (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "array", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "array", false, false, false, 59)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "array", false, false, false, 59), "html", null, true)) : (yield "No subtotal available"));
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "            <div class=\"justify-content-end mb-4\" style=\"text-align: end;\">
                <div class=\"col\">
                    <p>Nombre d'articles: ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 67, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-lg-2\">
                    <h3>Prix total: ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixTotalPanier"]) || array_key_exists("prixTotalPanier", $context) ? $context["prixTotalPanier"] : (function () { throw new RuntimeError('Variable "prixTotalPanier" does not exist.', 70, $this->source); })()), "html", null, true);
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
        return array (  256 => 70,  250 => 67,  246 => 65,  240 => 64,  229 => 59,  222 => 55,  216 => 52,  212 => 51,  206 => 48,  202 => 47,  197 => 44,  192 => 42,  187 => 41,  185 => 40,  181 => 38,  176 => 36,  172 => 35,  167 => 34,  161 => 31,  156 => 30,  154 => 29,  149 => 26,  145 => 24,  139 => 22,  137 => 21,  133 => 19,  128 => 18,  124 => 17,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
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
            <h1>Votre Panier</h1>
            <br>
        {% for panier in panierDetails %}
            {% for item in panier %}
                <div class=\"row bgdupanieritem\">
                    <div class=\"col-md-3\">
                        {% if item['images'] is defined and item['images'] is not null %}
                            <img src=\"{{ asset('images/' ~ item['images']) }}\" alt=\"image\" class=\"img-fluid card-img\">
                        {% else %}
                            <p>image pas trouvé</p>
                        {% endif %}
                    </div>
                    <div class=\"col-md-9 card-details\">
                        <div>
                            {% if item['promo'] is not null %}
                                <p> {{ item['name'] }} </p>
                                <h5>{{ item['promo'].getDescription() ?? 'Trouve pas de description' }}</h5>
                                <p>Promotion</p>
                            {% else %}
                                <h5>{{ item['name'] ?? 'Trouve pas de name' }}</h5>
                                <p>{{ item['description'] ?? 'Trouve pas de description' }}</p>
                                <p>{{ item['category'] ?? 'Trouve pas de category' }}</p>
                            {% endif %}
                        </div>
                        <div class=\"card-price\">
                            {% if item['promo'] is not null %}
                                <p style=\"color: red\">Prix après réduction: {{ item['price'] }} €/u</p>
                                <p  style=\"color: red\">-{{ item['reduction'] }} %</p>
                            {% endif %}
                        </div>

                        <div>
                            <form method=\"POST\" action=\"{{ path('enleverproduit_fromcart') }}\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"panierItemId\" value=\"{{ item['id'] }}\">
                                <a href=\"#\" class=\"delete-link\" onclick=\"this.parentNode.submit(); return false;\">Supprimer</a>
                            </form>
                            <form method=\"POST\" action=\"{{ path('update_quantity') }}\" class=\"quantity-form\">
                                <input type=\"hidden\" name=\"panierItemId\" value=\"{{ item['id'] }}\">
                                <div class=\"card-actions\">
                                    <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm quantity-btn add\">+</button>
                                    <p class=\"quantity-text\">Quantité: {{ item['quantity'] ?? 'No quantity available' }}</p>
                                    <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm quantity-btn subtract\">-</button>
                                </div>
                            </form>
                            <p>Sous-total: {{ item['subtotal'] ?? 'No subtotal available' }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endfor %}
            <div class=\"justify-content-end mb-4\" style=\"text-align: end;\">
                <div class=\"col\">
                    <p>Nombre d'articles: {{ panierDetails|length }}</p>
                </div>
                <div class=\"col-lg-2\">
                    <h3>Prix total: {{ prixTotalPanier }} €</h3>
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
