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

/* user/uservue/details.html.twig */
class __TwigTemplate_29067ea62a84e193a6984e29e785a716 extends Template
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
        return "headeruser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/details.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/details.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <br><br>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 11
        if (array_key_exists("product", $context)) {
            // line 12
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3\">
                        <img src=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "images", [], "any", false, false, false, 14))), "html", null, true);
            yield "\"  class=\"image-transition\" style=\"width: 100%\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details product-card\">
                        <h3>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "</h3>
                      ";
            // line 20
            $context["aUnePromotion"] = false;
            // line 21
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 22
                yield "                        ";
                $context["aUnePromotion"] = true;
                // line 23
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23))) {
                    // line 24
                    yield "                            
                                ";
                    // line 25
                    $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 26
                    yield "                                ";
                    $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 26), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 26, $this->source); })()), "U")) / (24 * 3600));
                    // line 27
                    yield "                                ";
                    if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 27, $this->source); })()) > 0)) {
                        // line 28
                        yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 28, $this->source); })()), 0, "floor"), "html", null, true);
                        yield "</p>
                                ";
                    } else {
                        // line 30
                        yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                ";
                    }
                    // line 32
                    yield "                                <p class=\"btn-reduction\"> - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 32), "html", null, true);
                    yield " %</p>
                                <p style=\"font-size: 80%\">À partir de :</p>
                                <p class=\"product-price original-price\">";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "html", null, true);
                    yield " €</p>
                                <p class=\"product-price discounted-price\" style=\"color: red;\">";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35) * (1 - (CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 35) / 100))), "html", null, true);
                    yield " €</p>
                            ";
                }
                // line 37
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                        ";
            if (((isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 38, $this->source); })()) == false)) {
                // line 39
                yield "                            <p class=\"product-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39), "html", null, true);
                yield " €</p>
                        ";
            }
            // line 41
            yield "                        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                    </div>                    
                <div class=\"product-footer product-card\">
                    ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "quantity", [], "any", false, false, false, 44) > 0)) {
                // line 45
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_dans_panier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" method=\"post\">
                            <div class=\"form-group\">
                                <p class=\"product-quantity\">Quantité disponible: ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "quantity", [], "any", false, false, false, 47), "html", null, true);
                yield "</p>
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "quantity", [], "any", false, false, false, 50)));
                foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                    // line 51
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
                // line 53
                yield "                                </select>
                            </div>
                            <br>
                            <div class=\"d-flex\">
                                <a href=\"/uservue\" class=\"btn btn-details\" style=\"margin-right:10%;\">< Retour</a>
                                    <button type=\"submit\" class=\"btn btn-details\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                        <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                        </svg>
                                    </button>
                            </div>
                        </form>
                    ";
            }
            // line 66
            yield "                </div>
                </div>
            ";
        }
        // line 69
        yield "        </div>
    </div>
    <br><br>
   <div class=\"container\">
    <h2>VitalityMarket vous recommande</h2>
    <br>
    <div class=\"row\">
        ";
        // line 76
        if (array_key_exists("products", $context)) {
            // line 77
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 78
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 78) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78))) {
                    // line 79
                    yield "                    ";
                    $context["produitenpromooupas"] = false;
                    // line 80
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 80, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                        // line 81
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 81))) {
                            // line 82
                            yield "                            ";
                            $context["produitenpromooupas"] = true;
                            // line 83
                            yield "                            <div class=\"col-md-6 col-lg-3 mb-4\">
                                <div class=\"card h-100 product-card\">
                                    <img src=\"";
                            // line 85
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "images", [], "any", false, false, false, 85))), "html", null, true);
                            yield "\" alt=\"image du produit\" class=\"product-image\">
                                    <div class=\"card-body product-details\">
                                        ";
                            // line 87
                            $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                            // line 88
                            yield "                                        ";
                            $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 88), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 88, $this->source); })()), "U")) / (24 * 3600));
                            // line 89
                            yield "                                        ";
                            if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 89, $this->source); })()) > 0)) {
                                // line 90
                                yield "                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 90, $this->source); })()), 0, "floor"), "html", null, true);
                                yield "</p>
                                        ";
                            } else {
                                // line 92
                                yield "                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                        ";
                            }
                            // line 94
                            yield "                                        <p class=\"btn-reduction\"> - ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 94), "html", null, true);
                            yield " %</p>
                                        <p style=\"font-size:80%\">A partir de :</p>
                                        <p class=\"product-price original-price\">";
                            // line 96
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 96), "html", null, true);
                            yield " €</p>
                                        <p class=\"product-price discounted-price\" style=\"color: red;\">";
                            // line 97
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "any", false, false, false, 97), "html", null, true);
                            yield " €</p>
                                        </div>
                                                                  <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">
                                        <a href=\"";
                            // line 101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                            yield "\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>

                                   
                                     </div>
                            </div>
                                </div>
                            </div>
                        ";
                        }
                        // line 111
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    yield "                    ";
                    if ( !(isset($context["produitenpromooupas"]) || array_key_exists("produitenpromooupas", $context) ? $context["produitenpromooupas"] : (function () { throw new RuntimeError('Variable "produitenpromooupas" does not exist.', 112, $this->source); })())) {
                        // line 113
                        yield "                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"card h-100 product-card\">
                                <img src=\"";
                        // line 115
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "images", [], "any", false, false, false, 115))), "html", null, true);
                        yield "\" alt=\"image du produit\" class=\"product-image\">
                                <div class=\"card-body product-details\">

                                    <p class=\"product-price\">";
                        // line 118
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 118), "html", null, true);
                        yield " €</p>
                                    <p>";
                        // line 119
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "description", [], "any", false, false, false, 119), "html", null, true);
                        yield "</p>
                                    <p class=\"product-quantity\">Quantité disponible: ";
                        // line 120
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 120), "html", null, true);
                        yield "</p>
                                    </div>
                                    <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">

                                    <a href=\"";
                        // line 125
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                        yield "\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
                                </div>
                                 </div>
                                </div>
                            </div>
                        
                    ";
                    }
                    // line 134
                    yield "                ";
                }
                // line 135
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "        ";
        }
        // line 137
        yield "    </div>
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
        return "user/uservue/details.html.twig";
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
        return array (  382 => 137,  379 => 136,  373 => 135,  370 => 134,  358 => 125,  350 => 120,  346 => 119,  342 => 118,  336 => 115,  332 => 113,  329 => 112,  323 => 111,  310 => 101,  303 => 97,  299 => 96,  293 => 94,  289 => 92,  283 => 90,  280 => 89,  277 => 88,  275 => 87,  270 => 85,  266 => 83,  263 => 82,  260 => 81,  255 => 80,  252 => 79,  249 => 78,  244 => 77,  242 => 76,  233 => 69,  228 => 66,  213 => 53,  202 => 51,  198 => 50,  192 => 47,  186 => 45,  184 => 44,  177 => 41,  171 => 39,  168 => 38,  162 => 37,  157 => 35,  153 => 34,  147 => 32,  143 => 30,  137 => 28,  134 => 27,  131 => 26,  129 => 25,  126 => 24,  123 => 23,  120 => 22,  115 => 21,  113 => 20,  109 => 19,  101 => 14,  97 => 12,  95 => 11,  90 => 8,  80 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Détails du Produit ou de la Promotion{% endblock %}



{% block body %}
    <br><br>
    <div class=\"container\">
        <div class=\"row\">
            {% if product is defined %}
                <div class=\"col-md-6\">
                    <div class=\"border p-3\">
                        <img src=\"{{ asset('images/' ~ product.images) }}\"  class=\"image-transition\" style=\"width: 100%\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details product-card\">
                        <h3>{{ product.name }}</h3>
                      {% set aUnePromotion = false %}
                        {% for promo in promotions %}
                        {% set aUnePromotion = true %}
                            {% if promo.idproduct.id == product.id %}
                            
                                {% set aujourdhui = 'now'|date('Y-m-d') %}
                                {% set joursRest = (promo.dateFin|date('U') - aujourdhui|date('U')) / (24 * 3600) %}
                                {% if joursRest > 0 %}
                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): {{ joursRest|round(0, 'floor') }}</p>
                                {% else %}
                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                {% endif %}
                                <p class=\"btn-reduction\"> - {{ promo.reduction }} %</p>
                                <p style=\"font-size: 80%\">À partir de :</p>
                                <p class=\"product-price original-price\">{{ product.price }} €</p>
                                <p class=\"product-price discounted-price\" style=\"color: red;\">{{ product.price * (1 - (promo.reduction / 100)) }} €</p>
                            {% endif %}
                        {% endfor %}
                        {% if aUnePromotion == false %}
                            <p class=\"product-price\">{{ product.price }} €</p>
                        {% endif %}
                        <p>{{ product.description }}</p>
                    </div>                    
                <div class=\"product-footer product-card\">
                    {% if product.quantity > 0 %}
                        <form action=\"{{ path('add_dans_panier', {'id': product.id}) }}\" method=\"post\">
                            <div class=\"form-group\">
                                <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    {% for qty in 0..product.quantity %}
                                        <option value=\"{{ qty }}\">{{ qty }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <br>
                            <div class=\"d-flex\">
                                <a href=\"/uservue\" class=\"btn btn-details\" style=\"margin-right:10%;\">< Retour</a>
                                    <button type=\"submit\" class=\"btn btn-details\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                        <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                        </svg>
                                    </button>
                            </div>
                        </form>
                    {% endif %}
                </div>
                </div>
            {% endif %}
        </div>
    </div>
    <br><br>
   <div class=\"container\">
    <h2>VitalityMarket vous recommande</h2>
    <br>
    <div class=\"row\">
        {% if products is defined %}
            {% for prod in products %}
                {% if prod.id != product.id %}
                    {% set produitenpromooupas = false %}
                    {% for promo in promotions %}
                        {% if promo.idproduct.id == prod.id %}
                            {% set produitenpromooupas = true %}
                            <div class=\"col-md-6 col-lg-3 mb-4\">
                                <div class=\"card h-100 product-card\">
                                    <img src=\"{{ asset('images/' ~ prod.images) }}\" alt=\"image du produit\" class=\"product-image\">
                                    <div class=\"card-body product-details\">
                                        {% set aujourdhui = 'now'|date('Y-m-d') %}
                                        {% set joursRest = (promo.dateFin|date('U') - aujourdhui|date('U')) / (24 * 3600) %}
                                        {% if joursRest > 0 %}
                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): {{ joursRest|round(0, 'floor') }}</p>
                                        {% else %}
                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                        {% endif %}
                                        <p class=\"btn-reduction\"> - {{ promo.reduction }} %</p>
                                        <p style=\"font-size:80%\">A partir de :</p>
                                        <p class=\"product-price original-price\">{{ prod.price }} €</p>
                                        <p class=\"product-price discounted-price\" style=\"color: red;\">{{ promo.getPriceafterpromo }} €</p>
                                        </div>
                                                                  <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">
                                        <a href=\"{{ path('details_produit_user', {'id': prod.id}) }}\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>

                                   
                                     </div>
                            </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if not produitenpromooupas %}
                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"card h-100 product-card\">
                                <img src=\"{{ asset('images/' ~ prod.images) }}\" alt=\"image du produit\" class=\"product-image\">
                                <div class=\"card-body product-details\">

                                    <p class=\"product-price\">{{ prod.price }} €</p>
                                    <p>{{ prod.description }}</p>
                                    <p class=\"product-quantity\">Quantité disponible: {{ prod.quantity }}</p>
                                    </div>
                                    <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">

                                    <a href=\"{{ path('details_produit_user', {'id': prod.id}) }}\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
                                </div>
                                 </div>
                                </div>
                            </div>
                        
                    {% endif %}
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
</div>
</div>

    <script>
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); 
        });
    </script>
{% endblock %}
", "user/uservue/details.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\details.html.twig");
    }
}
