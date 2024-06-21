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
    <h3>Les détails de l'utilisateur</h3>
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "email", [], "any", false, false, false, 105), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 109
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "roles", [], "any", false, false, false, 109)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "roles", [], "any", false, false, false, 109)), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "adresse", [], "any", false, false, false, 117), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Civilité</th>
                <td>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "civilite", [], "any", false, false, false, 121), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date création compte</th>
                <td>";
        // line 125
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "dateCreate", [], "any", false, false, false, 125)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "dateCreate", [], "any", false, false, false, 125), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Supprimé à</th>
                <td>";
        // line 129
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "deletedAt", [], "any", false, false, false, 129)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "deletedAt", [], "any", false, false, false, 129), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Expired à</th>
                <td>";
        // line 133
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "expiredAt", [], "any", false, false, false, 133)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "expiredAt", [], "any", false, false, false, 133), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
        </tbody>
    </table>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

    <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_index");
        yield "\" class=\"btn btn-details\" >< Retour</a>

    <a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)]), "html", null, true);
        yield "\" class=\"btn btn-details\">Editer</a>
    <form method=\"post\" action=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer l'utilisateur?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143))), "html", null, true);
        yield "\">
        <button class=\"btn btn-details\">Supprimer l'user</button>
    </form>
    </div>
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
        return array (  262 => 143,  258 => 142,  254 => 141,  249 => 139,  240 => 133,  233 => 129,  226 => 125,  219 => 121,  212 => 117,  205 => 113,  198 => 109,  191 => 105,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
    <h3>Les détails de l'utilisateur</h3>
    <table class=\"promo-admin-detail-table\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ user.name }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ user.adresse }}</td>
            </tr>
            <tr>
                <th>Civilité</th>
                <td>{{ user.civilite }}</td>
            </tr>
            <tr>
                <th>Date création compte</th>
                <td>{{ user.dateCreate ? user.dateCreate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Supprimé à</th>
                <td>{{ user.deletedAt ? user.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Expired à</th>
                <td>{{ user.expiredAt ? user.expiredAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">

    <a href=\"{{ path('app_gestion_user_index') }}\" class=\"btn btn-details\" >< Retour</a>

    <a href=\"{{ path('app_gestion_user_edit', {'id': user.id}) }}\" class=\"btn btn-details\">Editer</a>
    <form method=\"post\" action=\"{{ path('app_gestion_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Être vous sûr de vouloir supprimer l'utilisateur?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
        <button class=\"btn btn-details\">Supprimer l'user</button>
    </form>
    </div>
     </div>

</div>
{% endblock %}
", "admin/gestion_user/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\gestion_user\\show.html.twig");
    }
}
