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

/* admin/coupon/edit.html.twig */
class __TwigTemplate_61b84054ca74628a0111ab70a1d24062 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/edit.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/coupon/edit.html.twig", 1);
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

        yield "Edit Coupon";
        
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


    form {
        display: inline;
    }
</style>

<div class=\"container nature-card\">
    <h1>Modifier le Coupon</h1>

    ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
        yield "
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'widget');
        yield "
                <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_index");
        yield "\" class=\"btn btn-details\">< Retour</a>
                <button class=\"btn btn-details\">Enregistrer le Coupon</button>


    ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
            <form method=\"post\" action=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes vous sûr de vouloir supprimer le coupon?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75))), "html", null, true);
        yield "\">
            <button class=\"btn btn-details\">Supprimer</button>
        </form>
</div>

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
        return "admin/coupon/edit.html.twig";
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
        return array (  176 => 75,  172 => 74,  168 => 73,  161 => 69,  155 => 66,  151 => 65,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Edit Coupon{% endblock %}

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


    form {
        display: inline;
    }
</style>

<div class=\"container nature-card\">
    <h1>Modifier le Coupon</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
                <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

        <a href=\"{{ path('app_coupon_index') }}\" class=\"btn btn-details\">< Retour</a>
                <button class=\"btn btn-details\">Enregistrer le Coupon</button>


    {{ form_end(form) }}
            <form method=\"post\" action=\"{{ path('app_coupon_delete', {'id': coupon.id}) }}\" onsubmit=\"return confirm('Êtes vous sûr de vouloir supprimer le coupon?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coupon.id) }}\">
            <button class=\"btn btn-details\">Supprimer</button>
        </form>
</div>

</div>

{% endblock %}
", "admin/coupon/edit.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\coupon\\edit.html.twig");
    }
}
