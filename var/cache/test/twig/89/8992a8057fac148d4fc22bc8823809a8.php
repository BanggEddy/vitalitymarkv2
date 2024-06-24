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

/* admin/adminproducts/formedit.html.twig */

class __TwigTemplate_88a81360af4f4f7dda81a9ebafe13cc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/formedit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/formedit.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/formedit.html.twig", 1);
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

        yield "Édition d'un produit";

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return;
        yield '';
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
        yield "<br>
<div class=\"container nature-card\">
    <br>
    <h3> Editer un produit </h3>
    <form action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_form_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () {
            throw new RuntimeError('Variable "product" does not exist.', 10, $this->source);
        })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"mb-4\">
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 11, $this->source);
        })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 12, $this->source);
        })()), "name", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 13, $this->source);
        })()), "category", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "

            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 15, $this->source);
        })()), "quantity", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 16, $this->source);
        })()), "description", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "

        ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 18, $this->source);
        })()), "images", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)) {
            // line 19
            yield "            <div class=\"col-md-6\">
                ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
                throw new RuntimeError('Variable "productForm" does not exist.', 20, $this->source);
            })()), "images", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control", "onchange" => "previewImage(this)"]]);
            yield "
            </div>
        ";
        }
        // line 23
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 23, $this->source);
        })()), "images", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 24, $this->source);
        })()), "price", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "spaced-input"]]);
        yield "
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer</button>
        ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () {
            throw new RuntimeError('Variable "productForm" does not exist.', 26, $this->source);
        })()), 'form_end');
        yield "
    </form>
    <br>
</div>
<script>
    function previewImage(input) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('current-image').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
";

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return;
        yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/adminproducts/formedit.html.twig";
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
        return array(143 => 26,  138 => 24,  133 => 23,  127 => 20,  124 => 19,  122 => 18,  117 => 16,  113 => 15,  108 => 13,  104 => 12,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Édition d'un produit{% endblock %}

{% block body %}
<br>
<div class=\"container nature-card\">
    <br>
    <h3> Editer un produit </h3>
    <form action=\"{{ path('admin_form_edit', {'id': product.id}) }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"mb-4\">
        {{ form_start(productForm, {'attr': {'class': 'row g-3'}}) }}
            {{ form_row(productForm.name, {'attr': {'class': 'spaced-input'}}) }}
            {{ form_row(productForm.category, {'attr': {'class': 'spaced-input'}}) }}

            {{ form_row(productForm.quantity, {'attr': {'class': 'spaced-input'}}) }}
            {{ form_row(productForm.description, {'attr': {'class': 'spaced-input'}}) }}

        {% if productForm.images.vars.value %}
            <div class=\"col-md-6\">
                {{ form_row(productForm.images, {'attr': {'class': 'form-control', 'onchange': 'previewImage(this)'}}) }}
            </div>
        {% endif %}
            {{ form_row(productForm.images, {'attr': {'class': 'spaced-input'}}) }}
            {{ form_row(productForm.price, {'attr': {'class': 'spaced-input'}}) }}
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer</button>
        {{ form_end(productForm) }}
    </form>
    <br>
</div>
<script>
    function previewImage(input) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('current-image').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
{% endblock %}", "admin/adminproducts/formedit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\adminproducts\\formedit.html.twig");
    }
}
