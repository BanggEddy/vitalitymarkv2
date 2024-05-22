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

/* user/uservue/user.html.twig */
class __TwigTemplate_fe2f27a4160b7526cca7d9de1cbd257c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "headeruser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/user.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/user.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil utilisateur</h1>
          <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user_profile");
        yield "\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "civilite", [], "any", false, false, false, 27) == "M.")) {
            yield " selected ";
        }
        yield ">M.</option>
                <option value=\"Mme.\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "civilite", [], "any", false, false, false, 28) == "Mme.")) {
            yield " selected ";
        }
        yield ">Mme.</option>
                <option value=\"Autre\" ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "civilite", [], "any", false, false, false, 29) == "Autre")) {
            yield " selected ";
        }
        yield ">Autre</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>        
          </form>
          <form action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user_account");
        yield "\" method=\"post\">
            <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer votre compte ?')\">Supprimer mon compte</button>        
          </form>
        </div>
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
        return "user/uservue/user.html.twig";
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
        return array (  128 => 34,  118 => 29,  112 => 28,  106 => 27,  98 => 22,  91 => 18,  84 => 14,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block body %}

<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil utilisateur</h1>
          <form action=\"{{ path('edit_user_profile') }}\" method=\"post\">
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
          <form action=\"{{ path('delete_user_account') }}\" method=\"post\">
            <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer votre compte ?')\">Supprimer mon compte</button>        
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
{% endblock %}
", "user/uservue/user.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\user.html.twig");
    }
}
