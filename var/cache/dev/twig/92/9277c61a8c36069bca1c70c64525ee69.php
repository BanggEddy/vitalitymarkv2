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

/* user/uservue/card.html.twig */
class __TwigTemplate_655b9bb063772c1abaf9d06cf8a48fd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/card.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/card.html.twig", 1);
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
        yield "<style>
.loyalty-card-container {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.card-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; 
}

.loyalty-card {
    display: flex;
    align-items: center;
    background-color: #fff; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    max-width: 600px; 
    margin-top: 20px; 
}

.loyalty-card:hover {
    transform: scale(1.05);
}

.loyalty-card-image {
    flex: 1;
    padding: 20px;
}

.card-image {
    width: 200px;
    height: auto;
    border-radius: 50%;
    border: 4px solid #4CAF50;
    transition: transform 0.3s;
}

.card-image:hover {
    transform: rotate(360deg);
}

.loyalty-card-details {
    flex: 2;
    padding: 20px;
}

.card-info {
    font-size: 16px;
    margin-bottom: 10px;
}

.card-detail {
    font-weight: bold;
    color: #4CAF50;
}

.no-card-message {
    text-align: center;
    font-size: 25px;
    margin-bottom: 20px;
    color: #e74c3c;
}

.get-card-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.get-card-button:hover {
    background-color: #45a049;
}
</style>

";
        // line 90
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 94
        yield "
<div class=\"loyalty-card-container\">
    ";
        // line 96
        if ( !(isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 96, $this->source); })())) {
            // line 97
            yield "    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col text-center\">
                <img src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cartefidelite.png"), "html", null, true);
            yield "\" alt=\"Logo\" class=\"card-image\" style=\"width: 50% !important\">
            </div>
            <div class=\"col text-center\">
                <p class=\"no-card-message\">Vous n'avez pas de carte de fidélité.</p>
                <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creer_carte_loyalty");
            yield "\" class=\"get-card-button\">Obtenir une carte de fidélité</a>
            </div>
        </div>
    </div>

    ";
        } else {
            // line 110
            yield "        <h1 class=\"card-title\">Carte de fidélité</h1>
        <div class=\"loyalty-card\">
            <div class=\"loyalty-card-image\">
                <img src=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
            yield "\" alt=\"Logo\" class=\"card-image\">
            </div>
            <div class=\"loyalty-card-details\">
                <p class=\"card-info\">Numéro de carte: <span class=\"card-detail\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 116, $this->source); })()), "cardNumber", [], "any", false, false, false, 116), "html", null, true);
            yield "</span></p>
                <p class=\"card-info\">Type de carte: <span class=\"card-detail\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 117, $this->source); })()), "cardType", [], "any", false, false, false, 117), "html", null, true);
            yield "</span></p>
                <p class=\"card-info\">Points de fidélité: <span class=\"card-detail\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 118, $this->source); })()), "points", [], "any", false, false, false, 118), "html", null, true);
            yield "</span></p>
                <p class=\"card-info\">Offre personnalisée: <span class=\"card-detail\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 119, $this->source); })()), "personalizedOffer", [], "any", false, false, false, 119), "html", null, true);
            yield "</span></p>
            </div>
        </div>
    ";
        }
        // line 123
        yield "</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 90
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loyalty-card.css"), "html", null, true);
        yield "\">
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
        return "user/uservue/card.html.twig";
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
        return array (  245 => 92,  240 => 91,  230 => 90,  217 => 123,  210 => 119,  206 => 118,  202 => 117,  198 => 116,  192 => 113,  187 => 110,  178 => 104,  171 => 100,  166 => 97,  164 => 96,  160 => 94,  158 => 90,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block body %}
<style>
.loyalty-card-container {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.card-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; 
}

.loyalty-card {
    display: flex;
    align-items: center;
    background-color: #fff; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    max-width: 600px; 
    margin-top: 20px; 
}

.loyalty-card:hover {
    transform: scale(1.05);
}

.loyalty-card-image {
    flex: 1;
    padding: 20px;
}

.card-image {
    width: 200px;
    height: auto;
    border-radius: 50%;
    border: 4px solid #4CAF50;
    transition: transform 0.3s;
}

.card-image:hover {
    transform: rotate(360deg);
}

.loyalty-card-details {
    flex: 2;
    padding: 20px;
}

.card-info {
    font-size: 16px;
    margin-bottom: 10px;
}

.card-detail {
    font-weight: bold;
    color: #4CAF50;
}

.no-card-message {
    text-align: center;
    font-size: 25px;
    margin-bottom: 20px;
    color: #e74c3c;
}

.get-card-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.get-card-button:hover {
    background-color: #45a049;
}
</style>

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/loyalty-card.css') }}\">
{% endblock %}

<div class=\"loyalty-card-container\">
    {% if not loyaltyCard %}
    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col text-center\">
                <img src=\"{{ asset('images/cartefidelite.png') }}\" alt=\"Logo\" class=\"card-image\" style=\"width: 50% !important\">
            </div>
            <div class=\"col text-center\">
                <p class=\"no-card-message\">Vous n'avez pas de carte de fidélité.</p>
                <a href=\"{{ path('creer_carte_loyalty') }}\" class=\"get-card-button\">Obtenir une carte de fidélité</a>
            </div>
        </div>
    </div>

    {% else %}
        <h1 class=\"card-title\">Carte de fidélité</h1>
        <div class=\"loyalty-card\">
            <div class=\"loyalty-card-image\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" class=\"card-image\">
            </div>
            <div class=\"loyalty-card-details\">
                <p class=\"card-info\">Numéro de carte: <span class=\"card-detail\">{{ loyaltyCard.cardNumber }}</span></p>
                <p class=\"card-info\">Type de carte: <span class=\"card-detail\">{{ loyaltyCard.cardType }}</span></p>
                <p class=\"card-info\">Points de fidélité: <span class=\"card-detail\">{{ loyaltyCard.points }}</span></p>
                <p class=\"card-info\">Offre personnalisée: <span class=\"card-detail\">{{ loyaltyCard.personalizedOffer }}</span></p>
            </div>
        </div>
    {% endif %}
</div>
</div>
{% endblock %}
", "user/uservue/card.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\user\\uservue\\card.html.twig");
    }
}
