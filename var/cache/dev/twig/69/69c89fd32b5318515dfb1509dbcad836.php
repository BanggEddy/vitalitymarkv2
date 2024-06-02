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

/* auth/registration/register.html.twig */
class __TwigTemplate_720443800571800d2737fa3b009c069f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/registration/register.html.twig", 1);
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
    .card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
        padding: 20px;
        width: 400px;
        margin: 0 auto;
        background-color: #DBFFCA;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-7px); 
    }

    .form-group {
        margin-bottom: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100vh; 
        object-fit: cover; 
    }

    .green-background {
        background-color: #8CD769;
        padding: 20px;
        border-radius: 0 10px 10px 0;
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
    }

    .form-control:hover {
        transform: translateY(-5px); 
        transition: transform 0.3s ease; 
    }

    .form-control:focus {
        transform: translateY(0); 
        transition: transform 0.5s ease;
    }
    .btn-details {
        background-color: #8CD769; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 42%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#8CD769;
        transform: scale(1.05);
        transition: 0.5s; 


    }
</style>


    <body>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 p-0\">
                    <div class=\"green-background\">
                        <div class=\"card\">
                            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">&lt;- Retour</a>

                            <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">

                            <h2 class=\"text-center\">Inscription</h2>

                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), 'errors');
        yield "
                            <div class=\"form-group\">
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "civilite", [], "any", false, false, false, 83), 'row');
        yield "
                            </div>
                            ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
                            <div class=\"form-group\">
                                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                            </div>
                            <div class=\"form-group\">
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prénom et Nom"]]);
        yield "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "plainPassword", [], "any", false, false, false, 93), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 96
        yield "
                            </div>
                            <div class=\"form-group form-check\">
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "agreeTerms", [], "any", false, false, false, 99), 'row', ["label" => "Accepter les termes", "attr" => ["class" => "form-check-input", "style" => "margin-left: 20px;"]]);
        yield "
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "agreeTerms", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                            </div>

                            <button type=\"submit\" class=\"btn btn-details\">S'inscrire</button>
                            <p>*Champs obligatoires</p>
                            ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), 'form_end');
        yield "

                            <p class=\"mt-3 text-center\">Déjà un compte Vitality.fr ?  <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous ici</a></p>
                            <p class=\"mt-3 text-center\"><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Besoin d'aide ?</a></p>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 p-0\">
                    <div class=\"image-container\">
                        <img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connectetregister.png"), "html", null, true);
        yield "\" alt=\"Votre image\">
                    </div>
                </div>
            </div>
        </div>
    </body>
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
        return "auth/registration/register.html.twig";
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
        return array (  219 => 115,  209 => 108,  205 => 107,  200 => 105,  192 => 100,  188 => 99,  183 => 96,  181 => 93,  175 => 90,  169 => 87,  164 => 85,  159 => 83,  154 => 81,  147 => 77,  142 => 75,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
        padding: 20px;
        width: 400px;
        margin: 0 auto;
        background-color: #DBFFCA;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-7px); 
    }

    .form-group {
        margin-bottom: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100vh; 
        object-fit: cover; 
    }

    .green-background {
        background-color: #8CD769;
        padding: 20px;
        border-radius: 0 10px 10px 0;
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
    }

    .form-control:hover {
        transform: translateY(-5px); 
        transition: transform 0.3s ease; 
    }

    .form-control:focus {
        transform: translateY(0); 
        transition: transform 0.5s ease;
    }
    .btn-details {
        background-color: #8CD769; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 42%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#8CD769;
        transform: scale(1.05);
        transition: 0.5s; 


    }
</style>


    <body>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 p-0\">
                    <div class=\"green-background\">
                        <div class=\"card\">
                            <a href=\"{{ path('app_logout') }}\">&lt;- Retour</a>

                            <img src=\"{{ asset('images/logo.png') }}\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">

                            <h2 class=\"text-center\">Inscription</h2>

                            {{ form_errors(registrationForm) }}
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.civilite) }}
                            </div>
                            {{ form_start(registrationForm, {'attr': {'class': 'form'}}) }}
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                            </div>
                            <div class=\"form-group\">
                            {{ form_row(registrationForm.name, {'attr': {'class': 'form-control', 'placeholder': 'Prénom et Nom'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.plainPassword, {
                                    'label': 'Mot de passe',
                                    'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}
                                }) }}
                            </div>
                            <div class=\"form-group form-check\">
                                {{ form_row(registrationForm.agreeTerms, {'label': 'Accepter les termes', 'attr': {'class': 'form-check-input', 'style': 'margin-left: 20px;'}}) }}
                                {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            </div>

                            <button type=\"submit\" class=\"btn btn-details\">S'inscrire</button>
                            <p>*Champs obligatoires</p>
                            {{ form_end(registrationForm) }}

                            <p class=\"mt-3 text-center\">Déjà un compte Vitality.fr ?  <a href=\"{{ path('app_login') }}\">Connectez-vous ici</a></p>
                            <p class=\"mt-3 text-center\"><a href=\"{{ path('app_login') }}\">Besoin d'aide ?</a></p>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 p-0\">
                    <div class=\"image-container\">
                        <img src=\"{{ asset('images/connectetregister.png') }}\" alt=\"Votre image\">
                    </div>
                </div>
            </div>
        </div>
    </body>
{% endblock %}
", "auth/registration/register.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\Auth\\registration\\register.html.twig");
    }
}
