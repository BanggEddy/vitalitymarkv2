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

/* admin/coupon/index.html.twig */
class __TwigTemplate_21523c866832c0bac901f8d5d3b26453 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/index.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/coupon/index.html.twig", 1);
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

        yield "Coupon index";
        
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
<div class=\"promo-admin-container\">

    <h3>Les Coupons disponible</h3>

    <div class=\"d-flex justify-content-end mb-3\">
        <form method=\"get\" class=\"formrecherchecrud\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"motrecherche\" class=\"form-control\" placeholder=\"Rechercher par ID\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["motrecherche"], "method", false, false, false, 14), "html", null, true);
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
                <th>Type de coupon</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Date de fin</th>
                <th>Réduction</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coupons"]) || array_key_exists("coupons", $context) ? $context["coupons"] : (function () { throw new RuntimeError('Variable "coupons" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 36
            yield "            <tr class=\"promo-admin-table-row\">
                <td data-label=\"Id\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td data-label=\"Type\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td data-label=\"Description\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "description", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td data-label=\"Start Date\">";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "startDate", [], "any", false, false, false, 40)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "startDate", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td data-label=\"End Date\">";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "endDate", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "endDate", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td data-label=\"Reduction\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "reduction", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td data-label=\"Reduction\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "qty", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td data-label=\"Actions\">
                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"promo-admin-btn promo-admin-btn-show\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
                        </svg>
                    </a>
                    <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 50)]), "html", null, true);
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
            // line 59
            yield "            <tr>
                <td colspan=\"7\" class=\"promo-admin-no-records\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_new");
        yield "\" class=\"btn btn-details\">Créer un coupon pour un utilisateur</a>
    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loyalty_card_new");
        yield "\" class=\"btn btn-details\">Ajouter un coupon pour le même type</a>
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
        return "admin/coupon/index.html.twig";
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
        return array (  201 => 67,  197 => 66,  192 => 63,  183 => 59,  169 => 50,  161 => 45,  156 => 43,  152 => 42,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  129 => 36,  124 => 35,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Coupon index{% endblock %}

{% block body %}

<div class=\"promo-admin-container\">

    <h3>Les Coupons disponible</h3>

    <div class=\"d-flex justify-content-end mb-3\">
        <form method=\"get\" class=\"formrecherchecrud\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"motrecherche\" class=\"form-control\" placeholder=\"Rechercher par ID\" value=\"{{ app.request.get('motrecherche') }}\" class=\"promo-admin-search-input\">
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
                <th>Type de coupon</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Date de fin</th>
                <th>Réduction</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for coupon in coupons %}
            <tr class=\"promo-admin-table-row\">
                <td data-label=\"Id\">{{ coupon.id }}</td>
                <td data-label=\"Type\">{{ coupon.type }}</td>
                <td data-label=\"Description\">{{ coupon.description }}</td>
                <td data-label=\"Start Date\">{{ coupon.startDate ? coupon.startDate|date('Y-m-d') : '' }}</td>
                <td data-label=\"End Date\">{{ coupon.endDate ? coupon.endDate|date('Y-m-d') : '' }}</td>
                <td data-label=\"Reduction\">{{ coupon.reduction }}</td>
                <td data-label=\"Reduction\">{{ coupon.qty }}</td>
                <td data-label=\"Actions\">
                    <a href=\"{{ path('app_coupon_show', {'id': coupon.id}) }}\" class=\"promo-admin-btn promo-admin-btn-show\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-text-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z\"/>
                        </svg>
                    </a>
                    <a href=\"{{ path('app_coupon_edit', {'id': coupon.id}) }}\" class=\"promo-admin-btn promo-admin-btn-edit\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z\"/>
                        </svg>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\" class=\"promo-admin-no-records\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_coupon_new') }}\" class=\"btn btn-details\">Créer un coupon pour un utilisateur</a>
    <a href=\"{{ path('loyalty_card_new') }}\" class=\"btn btn-details\">Ajouter un coupon pour le même type</a>
</div>
{% endblock %}
", "admin/coupon/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\admin\\coupon\\index.html.twig");
    }
}
