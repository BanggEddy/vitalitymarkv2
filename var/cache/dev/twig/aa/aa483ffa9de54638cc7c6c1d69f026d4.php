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

/* Auth/security/login.html.twig */
class __TwigTemplate_c3ce086169618f72da2cbb33fbe509b9 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auth/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auth/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Auth/security/login.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
        background-color: #6495ED;
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
        background-color: #6495ED; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 37%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#6495ED;
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
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">&lt;- Retour</a>
                        <img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">
                        <h3 class=\"text-center text-primary mb-4\">Connectez vous</h3>

                        <form method=\"post\" class=\"mt-5\">
                            ";
        // line 83
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 83, $this->source); })())) {
            // line 84
            yield "                                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 84, $this->source); })()), "messageKey", [], "any", false, false, false, 84), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 84, $this->source); })()), "messageData", [], "any", false, false, false, 84), "security"), "html", null, true);
            yield "</div>
                            ";
        }
        // line 86
        yield "
                            ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
            // line 88
            yield "                                <div class=\"mb-3\">
                                    Vous êtes connecté en tant que ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "userIdentifier", [], "any", false, false, false, 89), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                                </div>
                            ";
        }
        // line 92
        yield "
                            <input type=\"email\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Adresse email\">
                            <br>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required autofocus placeholder=\"Mot de passe\">
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                </label>
                            </div>

                            <button class=\"btn btn-details\">Se connecter</button>
                        </form>
                        <p class=\"mt-3\" >Vous n'avez pas de compte? <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Inscrivez-vous ici</a></p>
                        <p class=\"mt-3 text-center\"><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Besoin d'aide ?</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 p-0\">
                <div class=\"image-container\">
                    <img src=\"";
        // line 114
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
        return "Auth/security/login.html.twig";
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
        return array (  234 => 114,  225 => 108,  221 => 107,  208 => 97,  201 => 93,  198 => 92,  190 => 89,  187 => 88,  185 => 87,  182 => 86,  176 => 84,  174 => 83,  167 => 79,  163 => 78,  90 => 7,  80 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

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
        background-color: #6495ED;
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
        background-color: #6495ED; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 37%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#6495ED;
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
                        <a href=\"{{ path('app_register') }}\">&lt;- Retour</a>
                        <img src=\"{{ asset('images/logo.png') }}\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">
                        <h3 class=\"text-center text-primary mb-4\">Connectez vous</h3>

                        <form method=\"post\" class=\"mt-5\">
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            {% if app.user %}
                                <div class=\"mb-3\">
                                    Vous êtes connecté en tant que {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                </div>
                            {% endif %}

                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Adresse email\">
                            <br>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required autofocus placeholder=\"Mot de passe\">
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                </label>
                            </div>

                            <button class=\"btn btn-details\">Se connecter</button>
                        </form>
                        <p class=\"mt-3\" >Vous n'avez pas de compte? <a href=\"{{ path('app_register') }}\">Inscrivez-vous ici</a></p>
                        <p class=\"mt-3 text-center\"><a href=\"{{ path('app_contact') }}\">Besoin d'aide ?</a></p>
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
", "Auth/security/login.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\Auth\\security\\login.html.twig");
    }
}
