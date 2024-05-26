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

/* admin/gestion_user/edit.html.twig */
class __TwigTemplate_1b11c87c90950827ec729ef13be88d45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/edit.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/gestion_user/edit.html.twig", 1);
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

        yield "Edit User";
        
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
        yield "<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        border-radius: 2%;
        border-color:#000;
        margin-top:3%;
    }
    .container h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .btn-group .btn {
        margin-right: 10px;
    }
    .btn-group form {
        display: inline-block;
    }
    .container input[type=text],
    .container input[type=date],
    .container textarea,
    .container select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .container select {
        background-color: #f8f8f8;
    }
    .promo-admin-detail-btn-back {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
        padding: 10px 10px;
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
        color: #0056b3;
    }

</style>

<div class=\"container\">
    <h1>Editer l'utilisateur</h1>

    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        yield "
    <div class=\"form-group\">
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label');
        yield "
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "roles", [], "any", false, false, false, 72), 'label');
        yield "
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "roles", [], "any", false, false, false, 73), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date_create", [], "any", false, false, false, 76), 'label');
        yield "
        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_create", [], "any", false, false, false, 77), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "deletedAt", [], "any", false, false, false, 80), 'label');
        yield "
        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "deletedAt", [], "any", false, false, false, 81), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "expiredAt", [], "any", false, false, false, 84), 'label');
        yield "
        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "expiredAt", [], "any", false, false, false, 85), 'widget');
        yield "
    </div>
<div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_index");
        yield "\" class=\"btn btn-details me-2\" style=\"text-align:center;\">< Retour</a>

    <button class=\"btn btn-details me-2\">Modifier</button>
    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "


    <form method=\"post\" action=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer l'utilisateur?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95))), "html", null, true);
        yield "\">
        <button class=\"btn btn-details\">Supprimer l'user</button>
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
        return "admin/gestion_user/edit.html.twig";
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
        return array (  223 => 95,  219 => 94,  213 => 91,  207 => 88,  201 => 85,  197 => 84,  191 => 81,  187 => 80,  181 => 77,  177 => 76,  171 => 73,  167 => 72,  161 => 69,  157 => 68,  152 => 66,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        border-radius: 2%;
        border-color:#000;
        margin-top:3%;
    }
    .container h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .btn-group .btn {
        margin-right: 10px;
    }
    .btn-group form {
        display: inline-block;
    }
    .container input[type=text],
    .container input[type=date],
    .container textarea,
    .container select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .container select {
        background-color: #f8f8f8;
    }
    .promo-admin-detail-btn-back {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
        padding: 10px 10px;
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
        color: #0056b3;
    }

</style>

<div class=\"container\">
    <h1>Editer l'utilisateur</h1>

    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.roles) }}
        {{ form_widget(form.roles) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.date_create) }}
        {{ form_widget(form.date_create) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.deletedAt) }}
        {{ form_widget(form.deletedAt) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.expiredAt) }}
        {{ form_widget(form.expiredAt) }}
    </div>
<div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
    <a href=\"{{ path('app_gestion_user_index') }}\" class=\"btn btn-details me-2\" style=\"text-align:center;\">< Retour</a>

    <button class=\"btn btn-details me-2\">Modifier</button>
    {{ form_end(form) }}


    <form method=\"post\" action=\"{{ path('app_gestion_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer l'utilisateur?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
        <button class=\"btn btn-details\">Supprimer l'user</button>
    </form>
</div>

</div>
{% endblock %}
", "admin/gestion_user/edit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\gestion_user\\edit.html.twig");
    }
}
