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

/* admin/gestion_user/show.html.twig */
class __TwigTemplate_1490a40aa7ab65e32f2c191cdec64de6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/show.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/gestion_user/show.html.twig", 1);
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

        yield "User";
        
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
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 112
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "roles", [], "any", false, false, false, 112)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "roles", [], "any", false, false, false, 112)), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "password", [], "any", false, false, false, 116), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "adresse", [], "any", false, false, false, 124), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Civilite</th>
                <td>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "civilite", [], "any", false, false, false, 128), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date_create</th>
                <td>";
        // line 132
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "dateCreate", [], "any", false, false, false, 132)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "dateCreate", [], "any", false, false, false, 132), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>DeletedAt</th>
                <td>";
        // line 136
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "deletedAt", [], "any", false, false, false, 136)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "deletedAt", [], "any", false, false, false, 136), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>ExpiredAt</th>
                <td>";
        // line 140
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "expiredAt", [], "any", false, false, false, 140)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "expiredAt", [], "any", false, false, false, 140), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_index");
        yield "\" class=\"btn btn-details\" >back to list</a>

    <a href=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
        yield "\" class=\"btn btn-details\">edit</a>
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
        return "admin/gestion_user/show.html.twig";
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
        return array (  266 => 147,  261 => 145,  253 => 140,  246 => 136,  239 => 132,  232 => 128,  225 => 124,  218 => 120,  211 => 116,  204 => 112,  197 => 108,  190 => 104,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}User{% endblock %}

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
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ user.name }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ user.adresse }}</td>
            </tr>
            <tr>
                <th>Civilite</th>
                <td>{{ user.civilite }}</td>
            </tr>
            <tr>
                <th>Date_create</th>
                <td>{{ user.dateCreate ? user.dateCreate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DeletedAt</th>
                <td>{{ user.deletedAt ? user.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>ExpiredAt</th>
                <td>{{ user.expiredAt ? user.expiredAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_gestion_user_index') }}\" class=\"btn btn-details\" >back to list</a>

    <a href=\"{{ path('app_gestion_user_edit', {'id': user.id}) }}\" class=\"btn btn-details\">edit</a>
    </div>

</div>
{% endblock %}
", "admin/gestion_user/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\gestion_user\\show.html.twig");
    }
}
