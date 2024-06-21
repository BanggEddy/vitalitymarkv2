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

/* accueil/agreeterms.html.twig */
class __TwigTemplate_e6071e9c6e8a639ef3009714564ea42b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/agreeterms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/agreeterms.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/agreeterms.html.twig", 1);
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
        yield "<body>
    <div class=\"container\">
    <br>
        <h1>Termes et Conditions</h1>
        <p>
            Bienvenue sur notre site web. Si vous continuez à naviguer et à utiliser ce site web, vous acceptez de vous conformer et d'être lié par les termes et conditions d'utilisation suivants, qui, avec notre politique de confidentialité, régissent la relation de VitalityMark avec vous en relation avec ce site web. Si vous êtes en désaccord avec une partie quelconque de ces termes et conditions, veuillez ne pas utiliser notre site web.
        </p>
        
        <h2>Utilisation du Site</h2>
        <p>
            Le contenu des pages de ce site web est pour votre information générale et utilisation uniquement. Il est sujet à changement sans préavis.
        </p>

        <h2>Confidentialité</h2>
        <p>
            VitalityMark s'engage à assurer que votre vie privée est protégée. Si nous vous demandons de fournir certaines informations par lesquelles vous pouvez être identifié lors de l'utilisation de ce site web, vous pouvez être assuré qu'elles seront uniquement utilisées conformément à cette déclaration de confidentialité.
        </p>

        <h2>Liens vers d'autres sites web</h2>
        <p>
            Notre site web peut contenir des liens vers d'autres sites web d'intérêt. Cependant, une fois que vous avez utilisé ces liens pour quitter notre site, vous devez noter que nous n'avons aucun contrôle sur cet autre site web. Par conséquent, nous ne pouvons pas être responsables de la protection et de la confidentialité des informations que vous fournissez en visitant ces sites, et ces sites ne sont pas régis par cette déclaration de confidentialité.
        </p>

        <h2>Votre consentement</h2>
        <p>
            En utilisant notre site, vous consentez à notre politique de confidentialité.
        </p>

        <h2>Contactez-nous</h2>
        <p>
            Si vous avez des questions concernant ces termes et conditions, veuillez nous contacter à serviceclient@vitalitymark.fr.
        </p>
    </div>
</body>
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
        return "accueil/agreeterms.html.twig";
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
<body>
    <div class=\"container\">
    <br>
        <h1>Termes et Conditions</h1>
        <p>
            Bienvenue sur notre site web. Si vous continuez à naviguer et à utiliser ce site web, vous acceptez de vous conformer et d'être lié par les termes et conditions d'utilisation suivants, qui, avec notre politique de confidentialité, régissent la relation de VitalityMark avec vous en relation avec ce site web. Si vous êtes en désaccord avec une partie quelconque de ces termes et conditions, veuillez ne pas utiliser notre site web.
        </p>
        
        <h2>Utilisation du Site</h2>
        <p>
            Le contenu des pages de ce site web est pour votre information générale et utilisation uniquement. Il est sujet à changement sans préavis.
        </p>

        <h2>Confidentialité</h2>
        <p>
            VitalityMark s'engage à assurer que votre vie privée est protégée. Si nous vous demandons de fournir certaines informations par lesquelles vous pouvez être identifié lors de l'utilisation de ce site web, vous pouvez être assuré qu'elles seront uniquement utilisées conformément à cette déclaration de confidentialité.
        </p>

        <h2>Liens vers d'autres sites web</h2>
        <p>
            Notre site web peut contenir des liens vers d'autres sites web d'intérêt. Cependant, une fois que vous avez utilisé ces liens pour quitter notre site, vous devez noter que nous n'avons aucun contrôle sur cet autre site web. Par conséquent, nous ne pouvons pas être responsables de la protection et de la confidentialité des informations que vous fournissez en visitant ces sites, et ces sites ne sont pas régis par cette déclaration de confidentialité.
        </p>

        <h2>Votre consentement</h2>
        <p>
            En utilisant notre site, vous consentez à notre politique de confidentialité.
        </p>

        <h2>Contactez-nous</h2>
        <p>
            Si vous avez des questions concernant ces termes et conditions, veuillez nous contacter à serviceclient@vitalitymark.fr.
        </p>
    </div>
</body>
{% endblock %}
", "accueil/agreeterms.html.twig", "C:\\Users\\David\\Desktop\\vitalitysecond\\vitalitymarkv2\\templates\\accueil\\agreeterms.html.twig");
    }
}
