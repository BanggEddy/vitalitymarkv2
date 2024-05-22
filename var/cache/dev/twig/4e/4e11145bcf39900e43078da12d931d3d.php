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

/* accueil/contact.html.twig */
class __TwigTemplate_ecee0a6ebb7659bdd22c5b7055053cb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/contact.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/contact.html.twig", 1);
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa; 
    }

    .container {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        transition: transform 0.3s ease; 
    }

    .container:hover {
        transform: translateY(-5px); 
    }

    h2 {
        color: #000; 
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type=\"text\"],
    input[type=\"email\"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease; 
    }

    input[type=\"text\"]:focus,
    input[type=\"email\"]:focus,
    textarea:focus {
        border-color: #4CAF50; 
    }

    input[type=\"text\"]:hover,
    input[type=\"email\"]:hover,
    textarea:hover {
        transform: translateY(-5px); 
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50; 
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease; 
    }

    button:hover {
        background-color: #45a049; 
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
</style>

<div class=\"container\">
    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["success"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            yield "        <div class=\"alert alert-success\">
            ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
    <h2>Nous Contacter</h2>
    <form action=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_submit");
        yield "\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"subject\">Sujet :</label>
            <select id=\"subject\" name=\"subject\" class=\"form-select\" required>
                <option value=\"\">Sélectionnez un sujet</option>
                <option value=\"Livraison\">Livraison</option>
                <option value=\"Produits\">Produits</option>
                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                <option value=\"Magasins\">Magasins</option>
                <option value=\"Stockage des Données\">Stockage des Données</option>
                <option value=\"Informations personnelles\">Informations personnelle</option>
                <option value=\"Autre\">Autre</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Votre Message :</label>
            <textarea id=\"message\" name=\"message\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-details\">Envoyer le Message</button>
    </form>
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
        return "accueil/contact.html.twig";
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
        return array (  176 => 96,  172 => 94,  163 => 91,  160 => 90,  156 => 89,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block body %}
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa; 
    }

    .container {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        transition: transform 0.3s ease; 
    }

    .container:hover {
        transform: translateY(-5px); 
    }

    h2 {
        color: #000; 
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type=\"text\"],
    input[type=\"email\"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease; 
    }

    input[type=\"text\"]:focus,
    input[type=\"email\"]:focus,
    textarea:focus {
        border-color: #4CAF50; 
    }

    input[type=\"text\"]:hover,
    input[type=\"email\"]:hover,
    textarea:hover {
        transform: translateY(-5px); 
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50; 
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease; 
    }

    button:hover {
        background-color: #45a049; 
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
</style>

<div class=\"container\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <h2>Nous Contacter</h2>
    <form action=\"{{ path('app_contact_submit') }}\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"subject\">Sujet :</label>
            <select id=\"subject\" name=\"subject\" class=\"form-select\" required>
                <option value=\"\">Sélectionnez un sujet</option>
                <option value=\"Livraison\">Livraison</option>
                <option value=\"Produits\">Produits</option>
                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                <option value=\"Magasins\">Magasins</option>
                <option value=\"Stockage des Données\">Stockage des Données</option>
                <option value=\"Informations personnelles\">Informations personnelle</option>
                <option value=\"Autre\">Autre</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Votre Message :</label>
            <textarea id=\"message\" name=\"message\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-details\">Envoyer le Message</button>
    </form>
</div>
{% endblock %}
", "accueil/contact.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\contact.html.twig");
    }
}
