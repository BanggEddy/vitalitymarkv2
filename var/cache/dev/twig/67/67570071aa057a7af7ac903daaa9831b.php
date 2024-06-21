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

/* admin/coupon/new.html.twig */
class __TwigTemplate_f9447c3e66aac2e6eac9bcc02c80abd0 extends Template
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
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/new.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/coupon/new.html.twig", 1);
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

        yield "New Coupon";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<style>
    .container {
        max-width: 500px;
        margin: 3% auto;
        padding: 20px;
        border-radius: 2%;
        background-color: #fff;
        border: 1px solid #000;
    }

    .nature-card h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .nature-card input[type=text],
    .nature-card input[type=date],
    .nature-card textarea,
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
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-right: 5px;
        display: inline-block;
        width: 80%;
        height: fit-content;
        margin-top: 2%;
        text-align: center;
    }

    .promo-admin-detail-btn-back:hover {
        background-color: #fff;
        color: #0056b3;
        text-decoration: none;
    }
</style>

<div class=\"container nature-card\">
    <h1>Ajouter un coupon pour un utilisateur</h1>

    ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'label');
        yield "
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'label');
        yield "
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "start_date", [], "any", false, false, false, 69), 'label');
        yield "
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "start_date", [], "any", false, false, false, 70), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "end_date", [], "any", false, false, false, 73), 'label');
        yield "
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "end_date", [], "any", false, false, false, 74), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "reduction", [], "any", false, false, false, 77), 'label');
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "reduction", [], "any", false, false, false, 78), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "qty", [], "any", false, false, false, 81), 'label');
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "qty", [], "any", false, false, false, 82), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "idloyaltycard", [], "any", false, false, false, 85), 'label');
        yield "
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "idloyaltycard", [], "any", false, false, false, 86), 'widget');
        yield "
        </div>
            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_index");
        yield "\" class=\"btn btn-details\">< Retour</a>
            <button class=\"btn btn-details\">Créer</button>
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
        return "admin/coupon/new.html.twig";
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
        return array (  224 => 90,  219 => 88,  214 => 86,  210 => 85,  204 => 82,  200 => 81,  194 => 78,  190 => 77,  184 => 74,  180 => 73,  174 => 70,  170 => 69,  164 => 66,  160 => 65,  154 => 62,  150 => 61,  145 => 59,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}New Coupon{% endblock %}

{% block body %}

<style>
    .container {
        max-width: 500px;
        margin: 3% auto;
        padding: 20px;
        border-radius: 2%;
        background-color: #fff;
        border: 1px solid #000;
    }

    .nature-card h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .nature-card input[type=text],
    .nature-card input[type=date],
    .nature-card textarea,
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
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-right: 5px;
        display: inline-block;
        width: 80%;
        height: fit-content;
        margin-top: 2%;
        text-align: center;
    }

    .promo-admin-detail-btn-back:hover {
        background-color: #fff;
        color: #0056b3;
        text-decoration: none;
    }
</style>

<div class=\"container nature-card\">
    <h1>Ajouter un coupon pour un utilisateur</h1>

    {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_label(form.type) }}
            {{ form_widget(form.type) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.start_date) }}
            {{ form_widget(form.start_date) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.end_date) }}
            {{ form_widget(form.end_date) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.reduction) }}
            {{ form_widget(form.reduction) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.qty) }}
            {{ form_widget(form.qty) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.idloyaltycard) }}
            {{ form_widget(form.idloyaltycard) }}
        </div>
            <a href=\"{{ path('app_coupon_index') }}\" class=\"btn btn-details\">< Retour</a>
            <button class=\"btn btn-details\">Créer</button>
    {{ form_end(form) }}
</div>

{% endblock %}
", "admin/coupon/new.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\coupon\\new.html.twig");
    }
}
