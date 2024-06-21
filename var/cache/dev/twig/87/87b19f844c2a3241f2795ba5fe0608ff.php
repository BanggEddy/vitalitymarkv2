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

/* accueil/indexproduit.html.twig */
class __TwigTemplate_2c0ef1685a0f8d344454d4a4de194db0 extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/indexproduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/indexproduit.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/indexproduit.html.twig", 1);
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

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
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
        yield "    <br><br>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 13
        if (array_key_exists("product", $context)) {
            // line 14
            yield "                <div class=\"col-md-6\">
                    <div class=\"border p-3\">
                        <img src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "images", [], "any", false, false, false, 16))), "html", null, true);
            yield "\"  class=\"image-transition\" style=\"width: 100%\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details product-card\">
                        <h3>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</h3>
                      ";
            // line 22
            $context["aUnePromotion"] = false;
            // line 23
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 24
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24))) {
                    // line 25
                    yield "                            ";
                    $context["aUnePromotion"] = true;
                    // line 26
                    yield "                                ";
                    $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 27
                    yield "                                ";
                    $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 27), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 27, $this->source); })()), "U")) / (24 * 3600));
                    // line 28
                    yield "                                ";
                    if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 28, $this->source); })()) > 0)) {
                        // line 29
                        yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 29, $this->source); })()), 0, "floor"), "html", null, true);
                        yield "</p>
                                ";
                    } else {
                        // line 31
                        yield "                                    <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                ";
                    }
                    // line 33
                    yield "                                <p class=\"btn-reduction\"> - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 33), "html", null, true);
                    yield " %</p>
                                <p style=\"font-size: 80%\">À partir de :</p>
                                <p class=\"product-price original-price\">";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), "html", null, true);
                    yield " €</p>
                                <p class=\"product-price remise-price\" style=\"color: red;\">";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36) * (1 - (CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 36) / 100))), "html", null, true);
                    yield " €</p>
                            ";
                }
                // line 38
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                        ";
            if (((isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 39, $this->source); })()) == false)) {
                // line 40
                yield "                            <p class=\"product-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), "html", null, true);
                yield " €</p>
                        ";
            }
            // line 42
            yield "                        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
            yield "</p>
                        <p class=\"product-quantity\">Quantité disponible: ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "quantity", [], "any", false, false, false, 43), "html", null, true);
            yield "</p>
                    </div>
                    <a href=\"/\" class=\"btn btn-details\">< Retour</a>
                </div>
            ";
        }
        // line 48
        yield "        </div>
    </div>
    <br><br>
   <div class=\"container\">
    <h2>VitalityMarket vous recommande</h2>
    <br>
    <div class=\"row\">
        ";
        // line 55
        if (array_key_exists("products", $context)) {
            // line 56
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 57
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 57) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                    ";
                    $context["produitenpromooupas"] = false;
                    // line 59
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 59, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                        // line 60
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) == CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 60))) {
                            // line 61
                            yield "                            ";
                            $context["produitenpromooupas"] = true;
                            // line 62
                            yield "                            <div class=\"col-md-6 col-lg-3 mb-4\">
                                <div class=\"card h-100 product-card\">
                                    <img src=\"";
                            // line 64
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "images", [], "any", false, false, false, 64))), "html", null, true);
                            yield "\" alt=\"image du produit\" class=\"product-image\">
                                    <div class=\"card-body product-details\">
                                        ";
                            // line 66
                            $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                            // line 67
                            yield "                                        ";
                            $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 67), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 67, $this->source); })()), "U")) / (24 * 3600));
                            // line 68
                            yield "                                        ";
                            if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 68, $this->source); })()) > 0)) {
                                // line 69
                                yield "                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 69, $this->source); })()), 0, "floor"), "html", null, true);
                                yield "</p>
                                        ";
                            } else {
                                // line 71
                                yield "                                            <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                                        ";
                            }
                            // line 73
                            yield "                                        <p class=\"btn-reduction\"> - ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 73), "html", null, true);
                            yield " %</p>
                                        <p style=\"font-size:80%\">A partir de :</p>
                                        <p class=\"product-price original-price\">";
                            // line 75
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 75), "html", null, true);
                            yield " €</p>
                                        <p class=\"product-price remise-price\" style=\"color: red;\">";
                            // line 76
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "any", false, false, false, 76), "html", null, true);
                            yield " €</p>
                                        </div>
                                                                  <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">
                                        <a href=\"";
                            // line 80
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                            yield "\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>

                                   
                                     </div>
                            </div>
                                </div>
                            </div>
                        ";
                        }
                        // line 90
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    yield "                    ";
                    if ( !(isset($context["produitenpromooupas"]) || array_key_exists("produitenpromooupas", $context) ? $context["produitenpromooupas"] : (function () { throw new RuntimeError('Variable "produitenpromooupas" does not exist.', 91, $this->source); })())) {
                        // line 92
                        yield "                        <div class=\"col-md-6 col-lg-3 mb-4\">
                            <div class=\"card h-100 product-card\">
                                <img src=\"";
                        // line 94
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "images", [], "any", false, false, false, 94))), "html", null, true);
                        yield "\" alt=\"image du produit\" class=\"product-image\">
                                <div class=\"card-body product-details\">

                                    <p class=\"product-price\">";
                        // line 97
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 97), "html", null, true);
                        yield " €</p>
                                    <p>";
                        // line 98
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "description", [], "any", false, false, false, 98), "html", null, true);
                        yield "</p>
                                    <p class=\"product-quantity\">Quantité disponible: ";
                        // line 99
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 99), "html", null, true);
                        yield "</p>
                                    </div>
                                    <div class=\"product-footer\">
                                                    <div class=\"d-flex justify-content-between\">

                                    <a href=\"";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                        yield "\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
                                </div>
                                 </div>
                                </div>
                            </div>
                        
                    ";
                    }
                    // line 113
                    yield "                ";
                }
                // line 114
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "        ";
        }
        // line 116
        yield "    </div>
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
        return "accueil/indexproduit.html.twig";
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
        return array (  360 => 116,  357 => 115,  351 => 114,  348 => 113,  336 => 104,  328 => 99,  324 => 98,  320 => 97,  314 => 94,  310 => 92,  307 => 91,  301 => 90,  288 => 80,  281 => 76,  277 => 75,  271 => 73,  267 => 71,  261 => 69,  258 => 68,  255 => 67,  253 => 66,  248 => 64,  244 => 62,  241 => 61,  238 => 60,  233 => 59,  230 => 58,  227 => 57,  222 => 56,  220 => 55,  211 => 48,  203 => 43,  198 => 42,  192 => 40,  189 => 39,  183 => 38,  178 => 36,  174 => 35,  168 => 33,  164 => 31,  158 => 29,  155 => 28,  152 => 27,  149 => 26,  146 => 25,  143 => 24,  138 => 23,  136 => 22,  132 => 21,  124 => 16,  120 => 14,  118 => 13,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Détails du Produit ou de la Promotion{% endblock %}

{% block stylesheets %}

{% endblock %}

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
                                <p style=\"font-size: 80%\">À partir de :</p>
                                <p class=\"product-price original-price\">{{ product.price }} €</p>
                                <p class=\"product-price remise-price\" style=\"color: red;\">{{ product.price * (1 - (promo.reduction / 100)) }} €</p>
                            {% endif %}
                        {% endfor %}
                        {% if aUnePromotion == false %}
                            <p class=\"product-price\">{{ product.price }} €</p>
                        {% endif %}
                        <p>{{ product.description }}</p>
                        <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    </div>
                    <a href=\"/\" class=\"btn btn-details\">< Retour</a>
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
                                        <p class=\"product-price remise-price\" style=\"color: red;\">{{ promo.getPriceafterpromo }} €</p>
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

    <script>
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); 
        });
    </script>
{% endblock %}
", "accueil/indexproduit.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\accueil\\indexproduit.html.twig");
    }
}
