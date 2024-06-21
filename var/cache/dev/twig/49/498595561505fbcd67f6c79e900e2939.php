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

/* admin/gestion_user/index.html.twig */
class __TwigTemplate_81452a84d461a6ca0a98befc343aaf53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestion_user/index.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/gestion_user/index.html.twig", 1);
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
        yield "    <div class=\"promo-admin-container\">
        <h3>Liste des utilisateurs</h3>
    <div class=\"d-flex justify-content-end mb-3\">
        <form method=\"get\" class=\"formrecherchecrud\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"motrecherche\" class=\"form-control\" placeholder=\"Rechercher par l'email\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["motrecherche"], "method", false, false, false, 11), "html", null, true);
        yield "\" class=\"promo-admin-search-input\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-outline-dark\">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
        <table class=\"table promo-admin-table\">
            <thead>
                <tr class=\"\">
                    <th>Id</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Nom</th>
                    <th style=\"font-size: 100%\">Date de creation</th>
                    <th>Date de suppression</th>
                    <th>Date d'expiration</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            yield "                <tr class=\"promo-admin-table-row\">
                    <td data-label=\"Id\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td data-label=\"Email\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td data-label=\"Roles\">";
            // line 36
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 36)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 36)), "html", null, true)) : (yield ""));
            yield "</td>
                    <td data-label=\"Name\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                    <td data-label=\"Date_create\">";
            // line 38
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateCreate", [], "any", false, false, false, 38)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateCreate", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td data-label=\"DeletedAt\">";
            // line 39
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "deletedAt", [], "any", false, false, false, 39)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "deletedAt", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td data-label=\"ExpiredAt\">";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "expiredAt", [], "any", false, false, false, 40)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "expiredAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td data-label=\"Actions\">
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"promo-admin-btn promo-admin-btn-show\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
                        <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
                        </svg></a>
                        <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"promo-admin-btn promo-admin-btn-edit\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z\"/>
                        </svg>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            yield "                <tr>
                    <td colspan=\"11\" class=\"promo-admin-no-records\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "            </tbody>
        </table>

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
        return "admin/gestion_user/index.html.twig";
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
        return array (  186 => 58,  177 => 54,  163 => 45,  157 => 42,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  132 => 35,  128 => 34,  125 => 33,  120 => 32,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <div class=\"promo-admin-container\">
        <h3>Liste des utilisateurs</h3>
    <div class=\"d-flex justify-content-end mb-3\">
        <form method=\"get\" class=\"formrecherchecrud\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"motrecherche\" class=\"form-control\" placeholder=\"Rechercher par l'email\" value=\"{{ app.request.get('motrecherche') }}\" class=\"promo-admin-search-input\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-outline-dark\">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
        <table class=\"table promo-admin-table\">
            <thead>
                <tr class=\"\">
                    <th>Id</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Nom</th>
                    <th style=\"font-size: 100%\">Date de creation</th>
                    <th>Date de suppression</th>
                    <th>Date d'expiration</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr class=\"promo-admin-table-row\">
                    <td data-label=\"Id\">{{ user.id }}</td>
                    <td data-label=\"Email\">{{ user.email }}</td>
                    <td data-label=\"Roles\">{{ user.roles ? user.roles|json_encode : '' }}</td>
                    <td data-label=\"Name\">{{ user.name }}</td>
                    <td data-label=\"Date_create\">{{ user.dateCreate ? user.dateCreate|date('Y-m-d') : '' }}</td>
                    <td data-label=\"DeletedAt\">{{ user.deletedAt ? user.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td data-label=\"ExpiredAt\">{{ user.expiredAt ? user.expiredAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td data-label=\"Actions\">
                        <a href=\"{{ path('app_gestion_user_show', {'id': user.id}) }}\" class=\"promo-admin-btn promo-admin-btn-show\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
                        <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
                        </svg></a>
                        <a href=\"{{ path('app_gestion_user_edit', {'id': user.id}) }}\" class=\"promo-admin-btn promo-admin-btn-edit\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z\"/>
                        </svg>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"11\" class=\"promo-admin-no-records\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}
", "admin/gestion_user/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\gestion_user\\index.html.twig");
    }
}
