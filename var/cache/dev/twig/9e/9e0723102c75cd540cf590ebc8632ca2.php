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

/* admin/coupon/show.html.twig */
class __TwigTemplate_ea869a9f9e45f340ffd068de57519724 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/show.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/coupon/show.html.twig", 1);
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

        yield "Coupon";
        
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

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table .table {
        background-color: #fff;
    }


</style>

<div class=\"container nature-card\">
    <h1>Détail du Coupon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Type</th>
                <td>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>";
        // line 97
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 97, $this->source); })()), "startDate", [], "any", false, false, false, 97)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 97, $this->source); })()), "startDate", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>End_date</th>
                <td>";
        // line 101
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 101, $this->source); })()), "endDate", [], "any", false, false, false, 101)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 101, $this->source); })()), "endDate", [], "any", false, false, false, 101), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 105, $this->source); })()), "reduction", [], "any", false, false, false, 105), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_index");
        yield "\" class=\"btn btn-details\">< Retour</a>
        <a href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        yield "\" class=\"btn btn-details\">Editer</a>
        <form method=\"post\" action=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Voulez vous vraiment supprimer le coupon?');\" style=\"display:inline;\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113))), "html", null, true);
        yield "\">
            <button class=\"btn btn-details\">Supprimer le Coupon</button>
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
        return "admin/coupon/show.html.twig";
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
        return array (  223 => 113,  219 => 112,  215 => 111,  211 => 110,  203 => 105,  196 => 101,  189 => 97,  182 => 93,  175 => 89,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Coupon{% endblock %}

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

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table .table {
        background-color: #fff;
    }


</style>

<div class=\"container nature-card\">
    <h1>Détail du Coupon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Type</th>
                <td>{{ coupon.type }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ coupon.description }}</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>{{ coupon.startDate ? coupon.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>End_date</th>
                <td>{{ coupon.endDate ? coupon.endDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>{{ coupon.reduction }}</td>
            </tr>
        </tbody>
    </table>

        <a href=\"{{ path('app_coupon_index') }}\" class=\"btn btn-details\">< Retour</a>
        <a href=\"{{ path('app_coupon_edit', {'id': coupon.id}) }}\" class=\"btn btn-details\">Editer</a>
        <form method=\"post\" action=\"{{ path('app_coupon_delete', {'id': coupon.id}) }}\" onsubmit=\"return confirm('Voulez vous vraiment supprimer le coupon?');\" style=\"display:inline;\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coupon.id) }}\">
            <button class=\"btn btn-details\">Supprimer le Coupon</button>
        </form>
</div>

{% endblock %}
", "admin/coupon/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\coupon\\show.html.twig");
    }
}
