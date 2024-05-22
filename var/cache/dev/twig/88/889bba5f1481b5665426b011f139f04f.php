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

/* admin/adminproducts/compteadmin.html.twig */
class __TwigTemplate_58f8bf80a63507618f87259421986d06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/compteadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/compteadmin.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/compteadmin.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\"> 
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil administrateur</h1>
          <form action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_admin_profile");
        yield "\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "civilite", [], "any", false, false, false, 28) == "M.")) {
            yield " selected ";
        }
        yield ">M.</option>
                <option value=\"Mme.\" ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "civilite", [], "any", false, false, false, 29) == "Mme.")) {
            yield " selected ";
        }
        yield ">Mme.</option>
                <option value=\"Autre\" ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "civilite", [], "any", false, false, false, 30) == "Autre")) {
            yield " selected ";
        }
        yield ">Autre</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>
          </form>
        </div>
      </div>
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
        return "admin/adminproducts/compteadmin.html.twig";
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
        return array (  138 => 30,  132 => 29,  126 => 28,  118 => 23,  111 => 19,  104 => 15,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\"> 
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil administrateur</h1>
          <form action=\"{{ path('edit_admin_profile') }}\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ user.email }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{ user.name }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"{{ user.adresse }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" {% if user.civilite == 'M.' %} selected {% endif %}>M.</option>
                <option value=\"Mme.\" {% if user.civilite == 'Mme.' %} selected {% endif %}>Mme.</option>
                <option value=\"Autre\" {% if user.civilite == 'Autre' %} selected {% endif %}>Autre</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "admin/adminproducts/compteadmin.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\admin\\adminproducts\\compteadmin.html.twig");
    }
}
