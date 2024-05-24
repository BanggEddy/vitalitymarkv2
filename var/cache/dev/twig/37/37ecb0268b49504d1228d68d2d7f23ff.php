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

/* accueil/legals.html.twig */
class __TwigTemplate_84f7481514de2b46fe5ca873e2756a28 extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/legals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/legals.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/legals.html.twig", 1);
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
        yield "<br><br><br>
<div class=\"container\">
<h2>Mentions légales</h2>

<div class=\"legal-info\">
    <p>
        Conformément aux dispositions de l’article 6-I 1° de la loi n°2004-575 du 21 juin 2004 relative à la confiance dans l’économie numérique, l’éditeur du site web www.vitalitymark.fr est :
    </p>

    <p>
        David, développeur indépendant et unique responsable du site. À ce jour, aucune société n'a encore été créée. Dès que le financement sera obtenu et le site terminé, il sera hébergé en ligne.
    </p>

    <p>
        Numéro de téléphone : 07 81 73 88 18
    </p>

    <p>
        Adresse électronique : davidli4532@gmail.com
    </p>

    <p>
        Le stockage du site www.vitalitymark.fr est effectué localement pour le moment, aucune société prestataire n'est engagée à cet effet.
    </p>
</div>
<br>

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
        return "accueil/legals.html.twig";
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
        return array (  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block body %}
<br><br><br>
<div class=\"container\">
<h2>Mentions légales</h2>

<div class=\"legal-info\">
    <p>
        Conformément aux dispositions de l’article 6-I 1° de la loi n°2004-575 du 21 juin 2004 relative à la confiance dans l’économie numérique, l’éditeur du site web www.vitalitymark.fr est :
    </p>

    <p>
        David, développeur indépendant et unique responsable du site. À ce jour, aucune société n'a encore été créée. Dès que le financement sera obtenu et le site terminé, il sera hébergé en ligne.
    </p>

    <p>
        Numéro de téléphone : 07 81 73 88 18
    </p>

    <p>
        Adresse électronique : davidli4532@gmail.com
    </p>

    <p>
        Le stockage du site www.vitalitymark.fr est effectué localement pour le moment, aucune société prestataire n'est engagée à cet effet.
    </p>
</div>
<br>

</div>
{% endblock %}
", "accueil/legals.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\accueil\\legals.html.twig");
    }
}
