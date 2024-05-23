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

/* admin/promo_admin/new.html.twig */
class __TwigTemplate_2361f5c993a950ae343156287ec2ab85 extends Template
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
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/new.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/promo_admin/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "
<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        border-radius: 2%;
        border-color:#000;
        margin-top:3%;
    }

    .nature-card h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .nature-card input[type=text],
    .nature-card input[type=date],
    .nature-card textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .nature-card select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    .promo-admin-detail-btn-back {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
        padding: 10px 10px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-right: 5px;
        display: inline-block;
        width: 80%;
        height: fit-content;
        margin-top: 2%;
    }
    .promo-admin-detail-btn-back:hover {
        background-color: #fff;
        text-decoration: none;
        color: #0056b3;
    }
</style>
<div class=\"container nature-card\">
    <h1>Ajouter un produit en promotion</h1>

    ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "reduction", [], "any", false, false, false, 69), 'label');
        yield "
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "reduction", [], "any", false, false, false, 70), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "date_fin", [], "any", false, false, false, 73), 'label');
        yield "
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date_fin", [], "any", false, false, false, 74), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_debut", [], "any", false, false, false, 77), 'label');
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_debut", [], "any", false, false, false, 78), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), 'label');
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "idproduct", [], "any", false, false, false, 85), 'label');
        yield "
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "idproduct", [], "any", false, false, false, 86), 'widget');
        yield "
        </div>
        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_index");
        yield "\" class=\"btn btn-details\">< Retour</a>
        <button class=\"btn btn-details\">Ajouter un produit en promo</button>
    ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "


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
        return "admin/promo_admin/new.html.twig";
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
        return array (  192 => 90,  187 => 88,  182 => 86,  178 => 85,  172 => 82,  168 => 81,  162 => 78,  158 => 77,  152 => 74,  148 => 73,  142 => 70,  138 => 69,  133 => 67,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}


{% block body %}

<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        border-radius: 2%;
        border-color:#000;
        margin-top:3%;
    }

    .nature-card h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .nature-card input[type=text],
    .nature-card input[type=date],
    .nature-card textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .nature-card select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    .promo-admin-detail-btn-back {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
        padding: 10px 10px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-right: 5px;
        display: inline-block;
        width: 80%;
        height: fit-content;
        margin-top: 2%;
    }
    .promo-admin-detail-btn-back:hover {
        background-color: #fff;
        text-decoration: none;
        color: #0056b3;
    }
</style>
<div class=\"container nature-card\">
    <h1>Ajouter un produit en promotion</h1>

    {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_label(form.reduction) }}
            {{ form_widget(form.reduction) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.date_fin) }}
            {{ form_widget(form.date_fin) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.date_debut) }}
            {{ form_widget(form.date_debut) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.idproduct) }}
            {{ form_widget(form.idproduct) }}
        </div>
        <a href=\"{{ path('app_promo_admin_index') }}\" class=\"btn btn-details\">< Retour</a>
        <button class=\"btn btn-details\">Ajouter un produit en promo</button>
    {{ form_end(form) }}


</div>

{% endblock %}
", "admin/promo_admin/new.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\promo_admin\\new.html.twig");
    }
}
