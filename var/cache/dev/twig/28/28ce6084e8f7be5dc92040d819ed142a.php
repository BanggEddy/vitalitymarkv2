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

/* accueil/categorie.html.twig */
class __TwigTemplate_7e9d9707cca1bb4e7e5bcc1d7b8ad237 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/categorie.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/categorie.html.twig", 1);
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
        yield "<div class=\"container\" style=\"margin-bottom: 40px; margin-top: 40px\">
    <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-md-6\" style=\"text-align: right; margin-bottom: 20px;\">
            <div>
                <h2 style=\"font-weight: bold;\"> Soutenir Action contre la Faim </h2>
                <br>
                <p>
                    Explorez un shopping unique, où chaque achat aide à combattre la faim mondiale grâce à Action contre la Faim. Rejoignez-nous pour faire une différence repas après repas.
                </p>
                <br>
                <a class=\"btn btn-details\" href=\"https://www.actioncontrelafaim.org/\" style=\"width: 30%\">Soutenir</a>
            </div>
        </div>
        <div class=\"col-md-6\" style=\"text-align: center;\">
            <div>
                <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asso.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"asso-front img-fluid\">
            </div>
        </div>
    </div>
</div>

<section style=\"background-color:#DBFFCA; margin-bottom:40px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carte.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
                <div style=\"padding:10%\">
                    <h2 style=\"font-weight: bold;\"> La carte de fidélité qui vous rapporte </h2>
                    <br>
                    <p> Jusqu'à 10 % en avantage carte sur plus de 1800 produits du quotidien, jusqu’à 50 % sur de nombreux produits des prospectus, vos tickets de caisse et bien d’autres avantages... Quand on vous dit qu’on est contre la vie chère.</p>
                    <br>
                    <a class=\"nav-link btn btn-details\" style=\"width:100%;\" href=\"/login\">Ma carte de fidélité</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class=\"container\">
        <h2>En ce moment</h2>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Boulangerie\" style=\"text-decoration: none;\">
                    <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/boulangerie.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Boulangerie</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Boucherie\" style=\"text-decoration: none;\">
                    <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/boucherie.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Boucherie</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Poisson\" style=\"text-decoration: none;\">
                    <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poisson.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Poisson</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Produits frais\" style=\"text-decoration: none;\">
                    <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/produit.png"), "html", null, true);
        yield "\" alt=\"";
        yield "photo";
        yield "\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Produits frais</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>


<div class=\"container\">
    <br>
    <h2>Résultats de la recherche</h2>
    <br>
        <div class=\"row justify-content-center\">

            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 92
            yield "    <div class=\"col-md-6 col-lg-3 mb-4\">
        <div class=\"card h-100 product-card\">
                <img src=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 94))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94), "html", null, true);
            yield "\" class=\"product-image\">
                <div class=\"card-body product-details\">
                    <h3>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96), "html", null, true);
            yield "</h3>
                    ";
            // line 97
            $context["aUnePromotion"] = false;
            // line 98
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 99
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "idproduct", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 99))) {
                    // line 100
                    yield "                            ";
                    $context["aUnePromotion"] = true;
                    // line 101
                    yield "                            ";
                    $context["aujourdhui"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 102
                    yield "                            ";
                    $context["joursRest"] = (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 102), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 102, $this->source); })()), "U")) / (24 * 3600));
                    // line 103
                    yield "                            ";
                    if (((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 103, $this->source); })()) > 0)) {
                        // line 104
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Jour(s) restant(s): ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["joursRest"]) || array_key_exists("joursRest", $context) ? $context["joursRest"] : (function () { throw new RuntimeError('Variable "joursRest" does not exist.', 104, $this->source); })()), 0, "floor"), "html", null, true);
                        yield "</p>
                            ";
                    } else {
                        // line 106
                        yield "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
                    }
                    // line 108
                    yield "                            <p class=\"btn-reduction\"> - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 108), "html", null, true);
                    yield " %</p>
                            <p style=\"font-size:80%\">A partir de :</p>
                            <p class=\"product-price original-price\">";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110), "html", null, true);
                    yield " €</p>
                            <p class=\"product-price remise-price\" style=\"color: red;\">";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111) * (1 - (CoreExtension::getAttribute($this->env, $this->source, $context["promo"], "reduction", [], "any", false, false, false, 111) / 100))), "html", null, true);
                    yield " €</p>
                        ";
                }
                // line 113
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                    ";
            if ( !(isset($context["aUnePromotion"]) || array_key_exists("aUnePromotion", $context) ? $context["aUnePromotion"] : (function () { throw new RuntimeError('Variable "aUnePromotion" does not exist.', 114, $this->source); })())) {
                // line 115
                yield "                        <p class=\"product-price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115), "html", null, true);
                yield " €</p>
                    ";
            }
            // line 117
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 117), "html", null, true);
            yield "</p>
                    </div>
                                        

                    <p class=\"product-quantity\">Quantité disponible: ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 121), "html", null, true);
            yield "</p>
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
 </div>
                    </div>
                </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        return "accueil/categorie.html.twig";
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
        return array (  296 => 131,  282 => 123,  277 => 121,  269 => 117,  263 => 115,  260 => 114,  254 => 113,  249 => 111,  245 => 110,  239 => 108,  235 => 106,  229 => 104,  226 => 103,  223 => 102,  220 => 101,  217 => 100,  214 => 99,  209 => 98,  207 => 97,  203 => 96,  196 => 94,  192 => 92,  188 => 91,  166 => 74,  153 => 66,  140 => 58,  127 => 50,  101 => 29,  86 => 19,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block body %}
<div class=\"container\" style=\"margin-bottom: 40px; margin-top: 40px\">
    <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-md-6\" style=\"text-align: right; margin-bottom: 20px;\">
            <div>
                <h2 style=\"font-weight: bold;\"> Soutenir Action contre la Faim </h2>
                <br>
                <p>
                    Explorez un shopping unique, où chaque achat aide à combattre la faim mondiale grâce à Action contre la Faim. Rejoignez-nous pour faire une différence repas après repas.
                </p>
                <br>
                <a class=\"btn btn-details\" href=\"https://www.actioncontrelafaim.org/\" style=\"width: 30%\">Soutenir</a>
            </div>
        </div>
        <div class=\"col-md-6\" style=\"text-align: center;\">
            <div>
                <img src=\"{{ asset('images/asso.png') }}\" alt=\"{{ 'photo' }}\" class=\"asso-front img-fluid\">
            </div>
        </div>
    </div>
</div>

<section style=\"background-color:#DBFFCA; margin-bottom:40px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <img src=\"{{ asset('images/carte.png') }}\" alt=\"{{ 'photo' }}\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
                <div style=\"padding:10%\">
                    <h2 style=\"font-weight: bold;\"> La carte de fidélité qui vous rapporte </h2>
                    <br>
                    <p> Jusqu'à 10 % en avantage carte sur plus de 1800 produits du quotidien, jusqu’à 50 % sur de nombreux produits des prospectus, vos tickets de caisse et bien d’autres avantages... Quand on vous dit qu’on est contre la vie chère.</p>
                    <br>
                    <a class=\"nav-link btn btn-details\" style=\"width:100%;\" href=\"/login\">Ma carte de fidélité</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class=\"container\">
        <h2>En ce moment</h2>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Boulangerie\" style=\"text-decoration: none;\">
                    <img src=\"{{ asset('images/boulangerie.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Boulangerie</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Boucherie\" style=\"text-decoration: none;\">
                    <img src=\"{{ asset('images/boucherie.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Boucherie</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Poisson\" style=\"text-decoration: none;\">
                    <img src=\"{{ asset('images/poisson.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Poisson</p>
                    </div>
                </a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"http://localhost:8000/accueil/categorie/Produits frais\" style=\"text-decoration: none;\">
                    <img src=\"{{ asset('images/produit.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
                    <div class=\"product-details\">
                        <p style=\"font-weight: bold; text-align:center; color: #000;\">Produits frais</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>


<div class=\"container\">
    <br>
    <h2>Résultats de la recherche</h2>
    <br>
        <div class=\"row justify-content-center\">

            {% for product in products %}
    <div class=\"col-md-6 col-lg-3 mb-4\">
        <div class=\"card h-100 product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"{{ product.name }}\" class=\"product-image\">
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
                    </div>
                                        

                    <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('details_produit', {'id': product.id}) }}\" class=\"btn btn-details\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
  <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
</svg></a>
 </div>
                    </div>
                </div>
            
        {% endfor %}
    </div>
</div>
{% endblock %}
", "accueil/categorie.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\accueil\\categorie.html.twig");
    }
}
