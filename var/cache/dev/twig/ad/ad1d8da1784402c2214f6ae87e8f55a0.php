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

/* admin/promo_admin/show.html.twig */
class __TwigTemplate_11bae142063a227bb47b4e122732727f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/promo_admin/show.html.twig", 1);
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

        yield "Promo";
        
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

.promo-admin-detail-container {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 20px auto;
}

.promo-admin-detail-title {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 2rem;
    font-weight: bold;
}

.promo-admin-detail-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.promo-admin-detail-table th,
.promo-admin-detail-table td {
    padding: 15px;
    text-align: left;
    font-size: 1rem;
    border-bottom: 1px solid #ddd;
}

.promo-admin-detail-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.promo-admin-detail-btn {
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    background-color: #4CAF50;
    border-radius: 4px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin-right: 5px;
    display: inline-block;
}

.promo-admin-detail-btn-back {
    background-color: #0056b3;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn-edit {
    background-color: #FFC107;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn-delete {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn:hover {
    transform: scale(1.05);
    background-color: #45a049;
}

.promo-admin-detail-btn-back:hover {
    background-color: #fff;
    text-decoration: none;
    color: #0056b3;
}

.promo-admin-detail-btn-edit:hover {
    background-color: #fff;
    color: #FFC107;
    text-decoration: none;
}

.promo-admin-detail-btn-delete:hover {
    background-color: #fff;
    color: #ff0000;
    text-decoration: none;
}
</style>

<div class=\"promo-admin-detail-container\">
<h3> Détail du promo</h3>
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 110, $this->source); })()), "reduction", [], "any", false, false, false, 110), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>";
        // line 114
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 114, $this->source); })()), "dateFin", [], "any", false, false, false, 114)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 114, $this->source); })()), "dateFin", [], "any", false, false, false, 114), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>";
        // line 118
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 118, $this->source); })()), "dateDebut", [], "any", false, false, false, 118)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 118, $this->source); })()), "dateDebut", [], "any", false, false, false, 118), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 122, $this->source); })()), "description", [], "any", false, false, false, 122), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
        <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_index");
        yield "\" class=\"promo-admin-detail-btn promo-admin-detail-btn-back\">< Retour</a>
        <a href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
        yield "\" class=\"promo-admin-detail-btn promo-admin-detail-btn-edit\">Modifier</a>
        <form method=\"post\" action=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Es-tu sur de vouloir supprimer ce produit en réduction?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131))), "html", null, true);
        yield "\">
            <button class=\"btn promo-admin-detail-btn promo-admin-detail-btn-delete\">Supprimer</button>
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
        return "admin/promo_admin/show.html.twig";
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
        return array (  241 => 131,  237 => 130,  233 => 129,  229 => 128,  220 => 122,  213 => 118,  206 => 114,  199 => 110,  192 => 106,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Promo{% endblock %}

{% block body %}
<style>

.promo-admin-detail-container {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 20px auto;
}

.promo-admin-detail-title {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 2rem;
    font-weight: bold;
}

.promo-admin-detail-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.promo-admin-detail-table th,
.promo-admin-detail-table td {
    padding: 15px;
    text-align: left;
    font-size: 1rem;
    border-bottom: 1px solid #ddd;
}

.promo-admin-detail-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.promo-admin-detail-btn {
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    background-color: #4CAF50;
    border-radius: 4px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin-right: 5px;
    display: inline-block;
}

.promo-admin-detail-btn-back {
    background-color: #0056b3;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn-edit {
    background-color: #FFC107;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn-delete {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.promo-admin-detail-btn:hover {
    transform: scale(1.05);
    background-color: #45a049;
}

.promo-admin-detail-btn-back:hover {
    background-color: #fff;
    text-decoration: none;
    color: #0056b3;
}

.promo-admin-detail-btn-edit:hover {
    background-color: #fff;
    color: #FFC107;
    text-decoration: none;
}

.promo-admin-detail-btn-delete:hover {
    background-color: #fff;
    color: #ff0000;
    text-decoration: none;
}
</style>

<div class=\"promo-admin-detail-container\">
<h3> Détail du promo</h3>
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ promo.id }}</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>{{ promo.reduction }}</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>{{ promo.dateFin ? promo.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>{{ promo.dateDebut ? promo.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ promo.description }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
        <a href=\"{{ path('app_promo_admin_index') }}\" class=\"promo-admin-detail-btn promo-admin-detail-btn-back\">< Retour</a>
        <a href=\"{{ path('app_promo_admin_edit', {'id': promo.id}) }}\" class=\"promo-admin-detail-btn promo-admin-detail-btn-edit\">Modifier</a>
        <form method=\"post\" action=\"{{ path('app_promo_admin_delete', {'id': promo.id}) }}\" onsubmit=\"return confirm('Es-tu sur de vouloir supprimer ce produit en réduction?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promo.id) }}\">
            <button class=\"btn promo-admin-detail-btn promo-admin-detail-btn-delete\">Supprimer</button>
        </form>
    </div>

</div>
{% endblock %}
", "admin/promo_admin/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\promo_admin\\show.html.twig");
    }
}
