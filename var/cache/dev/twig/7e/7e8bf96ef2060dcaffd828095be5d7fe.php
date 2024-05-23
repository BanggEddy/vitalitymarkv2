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

/* headeruser.html.twig */
class __TwigTemplate_2ed6cf42ff00a0edffaeff409e4ae892 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headeruser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headeruser.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-success bg-custom\"> 
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/uservue\">
                    <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panier");
        yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                </svg>
                            Voir le panier
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_promo");
        yield "\"><span style=\"color:red;\">
                                Promos
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-tags\" viewBox=\"0 0 16 16\">
                                        <path d=\"M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z\"/>
                                        <path d=\"M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z\"/>
                                    </svg> 
                            </span></a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                        <form action=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        yield "\" method=\"post\" class=\"form-inline my-2 my-lg-0 me-auto\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/contact/user\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle-fill\" viewBox=\"0 0 16 16\">
                                        <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2\"/>
                                    </svg>
                                Aide et Contact
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_loyalty_card", ["id" => (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 63, $this->source); })())]), "html", null, true);
        yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-card-heading\" viewBox=\"0 0 16 16\">
                                    <path d=\"M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z\"/>
                                    <path d=\"M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z\"/>
                                </svg>
                            Ma carte de fidélité
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/user/profile\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6\"/>
                                </svg>  
                                Mon Compte
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/logout\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-left\" viewBox=\"0 0 16 16\">
                                    <path fill-rule=\"evenodd\" d=\"M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z\"/>
                                </svg>
                            Déconnexion
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/login\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"red\" class=\"bi bi-cart\" style=\"margin-bottom:4px\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2\"/>
                                </svg>
                                <span class=\"text-danger\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "€</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        ";
        // line 101
        yield from         $this->loadTemplate("/user/uservue/panieroffcanvas.html.twig", "headeruser.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "        <section class=\"section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\"> 
                    <div class=\"col-lg-8 col-md-10 col-sm-12\">
                        <div class=\"form-container\">
                            <h1>Bienvenue :)</h1>
                            <p>Drive, Piéton, Cliquez Collectez, Livraison... C'est à vous de décider !</p>
                                <form class=\"form-inline\" method=\"POST\">
                                    ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["barreRechercheCategory"]) || array_key_exists("barreRechercheCategory", $context) ? $context["barreRechercheCategory"] : (function () { throw new RuntimeError('Variable "barreRechercheCategory" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline"]]);
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["barreRechercheCategory"]) || array_key_exists("barreRechercheCategory", $context) ? $context["barreRechercheCategory"] : (function () { throw new RuntimeError('Variable "barreRechercheCategory" does not exist.', 112, $this->source); })()), "category", [], "any", false, false, false, 112), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Rechercher", "aria-label" => "Search"]]);
        yield "
                                        <div class=\"input-group-append\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["barreRechercheCategory"]) || array_key_exists("barreRechercheCategory", $context) ? $context["barreRechercheCategory"] : (function () { throw new RuntimeError('Variable "barreRechercheCategory" does not exist.', 121, $this->source); })()), 'form_end');
        yield "
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

";
        // line 129
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", ["_route"], "method", false, false, false, 129), ["user_panier", "user_profile", "app_contact_user"])) {
            // line 130
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
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asso.png"), "html", null, true);
            yield "\" alt=\"";
            yield "photo";
            yield "\" class=\"asso-front img-fluid\">
            </div>
        </div>
    </div>
</div>

";
            // line 151
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151), ["user_loyalty_card_page"])) {
                // line 152
                yield "<section style=\"background-color:#DBFFCA; margin-bottom:40px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <img src=\"";
                // line 156
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
                    <a class=\"nav-link btn btn-details\" style=\"width:100%;\" href=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_loyalty_card", ["id" => (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 164, $this->source); })())]), "html", null, true);
                yield "\">Ma carte de fidélité</a>
                </div>
            </div>
        </div>
    </div>
</section>
    ";
            }
            // line 171
            yield "<div class=\"container\">
<div class=\"row\">
        <h2>En ce moment</h2>
        <div class=\"col-md-3\">
    <a href=\"http://localhost:8000/user/uservue/categorie/Boulangerie\" style=\"text-decoration: none;\">
        <img src=\"";
            // line 176
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
    <a href=\"http://localhost:8000/user/uservue/categorie/Boucherie\" style=\"text-decoration: none;\">
        <img src=\"";
            // line 185
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
    <a href=\"http://localhost:8000/user/uservue/categorie/Poisson\" style=\"text-decoration: none;\">
        <img src=\"";
            // line 193
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
    <a href=\"http://localhost:8000/user/uservue/categorie/Produits frais\" style=\"text-decoration: none;\">
        <img src=\"";
            // line 201
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
    
";
        }
        // line 210
        yield "
";
        // line 211
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 213
        yield "<br>
<br>

<section2 class=\"row justify-content-around\">
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Obtenir de l'aide</h2>
                <p>Des experts sont là pour vous aider.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Trouver un magasin</h2>
                <p>Localisez nos magasins près de chez vous.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Télécharger l'application</h2>
                <p>Accédez à nos services où que vous soyez.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>FAQ & Questions?</h2>
                <p>Trouver des réponses à vos questions.</p>
            </div>
        </div>
    </div>
</section2>

    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryForm = document.getElementById('categoryForm');
        const categorySelect = document.getElementById('category');

        categoryForm.addEventListener('submit', function(event) {
            if (!categorySelect.value) {
                event.preventDefault(); 
                alert('Veuillez sélectionner une catégorie.'); 
            }
        });
    });
</script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "VitalityMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 211
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "headeruser.html.twig";
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
        return array (  449 => 211,  430 => 9,  410 => 5,  343 => 213,  341 => 211,  338 => 210,  324 => 201,  311 => 193,  298 => 185,  284 => 176,  277 => 171,  267 => 164,  254 => 156,  248 => 152,  246 => 151,  235 => 145,  218 => 130,  216 => 129,  205 => 121,  193 => 112,  188 => 110,  178 => 102,  176 => 101,  165 => 93,  132 => 63,  109 => 43,  95 => 32,  84 => 24,  73 => 16,  65 => 10,  63 => 9,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}VitalityMarket{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-success bg-custom\"> 
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/uservue\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('user_panier') }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5\"/>
                                </svg>
                            Voir le panier
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_user_promo') }}\"><span style=\"color:red;\">
                                Promos
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-tags\" viewBox=\"0 0 16 16\">
                                        <path d=\"M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z\"/>
                                        <path d=\"M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z\"/>
                                    </svg> 
                            </span></a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                        <form action=\"{{ path('search_user') }}\" method=\"post\" class=\"form-inline my-2 my-lg-0 me-auto\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-success\" type=\"submit\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/contact/user\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle-fill\" viewBox=\"0 0 16 16\">
                                        <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2\"/>
                                    </svg>
                                Aide et Contact
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('user_loyalty_card', {'id': user_id}) }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-card-heading\" viewBox=\"0 0 16 16\">
                                    <path d=\"M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z\"/>
                                    <path d=\"M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z\"/>
                                </svg>
                            Ma carte de fidélité
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/user/profile\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6\"/>
                                </svg>  
                                Mon Compte
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/logout\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-left\" viewBox=\"0 0 16 16\">
                                    <path fill-rule=\"evenodd\" d=\"M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z\"/>
                                </svg>
                            Déconnexion
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/login\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"red\" class=\"bi bi-cart\" style=\"margin-bottom:4px\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2\"/>
                                </svg>
                                <span class=\"text-danger\">{{ totalPrice }}€</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        {% include '/user/uservue/panieroffcanvas.html.twig' %}
        <section class=\"section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\"> 
                    <div class=\"col-lg-8 col-md-10 col-sm-12\">
                        <div class=\"form-container\">
                            <h1>Bienvenue :)</h1>
                            <p>Drive, Piéton, Cliquez Collectez, Livraison... C'est à vous de décider !</p>
                                <form class=\"form-inline\" method=\"POST\">
                                    {{ form_start(barreRechercheCategory, {'attr': {'class': 'form-inline'}}) }}
                                    <div class=\"input-group\">
                                        {{ form_row(barreRechercheCategory.category, {'attr': {'class': 'form-control', 'placeholder': 'Rechercher', 'aria-label': 'Search'}}) }}
                                        <div class=\"input-group-append\">
                                            <button type=\"submit\" class=\"btn btn-success\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                {{ form_end(barreRechercheCategory) }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

{% if app.request.attributes.get('_route') not in ['user_panier', 'user_profile', 'app_contact_user'] %}
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

{% if app.request.attributes.get('_route') not in ['user_loyalty_card_page'] %}
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
                    <a class=\"nav-link btn btn-details\" style=\"width:100%;\" href=\"{{ path('user_loyalty_card', {'id': user_id})}}\">Ma carte de fidélité</a>
                </div>
            </div>
        </div>
    </div>
</section>
    {% endif %}
<div class=\"container\">
<div class=\"row\">
        <h2>En ce moment</h2>
        <div class=\"col-md-3\">
    <a href=\"http://localhost:8000/user/uservue/categorie/Boulangerie\" style=\"text-decoration: none;\">
        <img src=\"{{ asset('images/boulangerie.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
        <div class=\"product-details\">
            <p style=\"font-weight: bold; text-align:center; color: #000;\">Boulangerie</p>
        </div>
    </a>
</div>

<div class=\"col-md-3\">
    <a href=\"http://localhost:8000/user/uservue/categorie/Boucherie\" style=\"text-decoration: none;\">
        <img src=\"{{ asset('images/boucherie.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
        <div class=\"product-details\">
            <p style=\"font-weight: bold; text-align:center; color: #000;\">Boucherie</p>
        </div>
    </a>
</div>
<div class=\"col-md-3\">
    <a href=\"http://localhost:8000/user/uservue/categorie/Poisson\" style=\"text-decoration: none;\">
        <img src=\"{{ asset('images/poisson.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
        <div class=\"product-details\">
            <p style=\"font-weight: bold; text-align:center; color: #000;\">Poisson</p>
        </div>
    </a>
</div>
<div class=\"col-md-3\">
    <a href=\"http://localhost:8000/user/uservue/categorie/Produits frais\" style=\"text-decoration: none;\">
        <img src=\"{{ asset('images/produit.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-imagee\">
        <div class=\"product-details\">
            <p style=\"font-weight: bold; text-align:center; color: #000;\">Produits frais</p>
        </div>
    </a>
</div>
</div>
    
{% endif %}

{% block body %}
{% endblock %}
<br>
<br>

<section2 class=\"row justify-content-around\">
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Obtenir de l'aide</h2>
                <p>Des experts sont là pour vous aider.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Trouver un magasin</h2>
                <p>Localisez nos magasins près de chez vous.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Télécharger l'application</h2>
                <p>Accédez à nos services où que vous soyez.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>FAQ & Questions?</h2>
                <p>Trouver des réponses à vos questions.</p>
            </div>
        </div>
    </div>
</section2>

    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryForm = document.getElementById('categoryForm');
        const categorySelect = document.getElementById('category');

        categoryForm.addEventListener('submit', function(event) {
            if (!categorySelect.value) {
                event.preventDefault(); 
                alert('Veuillez sélectionner une catégorie.'); 
            }
        });
    });
</script>
</body>
</html>
", "headeruser.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\headeruser.html.twig");
    }
}
