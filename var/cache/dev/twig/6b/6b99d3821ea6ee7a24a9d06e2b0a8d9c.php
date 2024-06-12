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

/* user/uservue/panieroffcanvas.html.twig */
class __TwigTemplate_cd31c627b7d0837a530e889edeb71fad extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/panieroffcanvas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/panieroffcanvas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/uservue/panieroffcanvas.html.twig", 1);
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
        yield "    <h1>Panier de l'utilisateur</h1>

    <style>
      .offcanvas-header {
        background-color: #fff;
        border-bottom: 1px solid #dee2e6;
      }

      .offcanvas-title {
        color: #000 !important;
        margin-bottom: 0;
      }

      .offcanvas-body {
        padding: 20px;
        background-color: rgb(235, 235, 235);
      }

      .accordion-item {
        background-color: #dee2e6;
        border: none;
        margin-bottom: 10px;
      }

      .accordion-button {
        background-color: #0000;
        color: #212529;
        border: none;
        border-radius: 0;
        padding: 10px 20px;
        text-align: left;
        width: 100%;
      }

      .accordion-button:hover {
        background-color: #000;
        color: #fff;
      }

      .accordion-button.collapsed {
        background-color: #fff;
        color: #000;
      }

      .accordion-body {
        background-color: #fff;
        border-top: 1px solid #7cdf7c;
        padding: 20px;
      }

      .accordion-body .img-container {
        margin-bottom: 10px;
      }

      .accordion-body .img-container img {
        max-width: 100px;
        max-height: 100px;
      }

      .accordion-body .text-container {
        margin-bottom: 10px;
      }

      .accordion-body h5 {
        font-size: 16px;
        margin-bottom: 5px;
      }

      .accordion-body p {
        font-size: 14px;
        margin-bottom: 5px;
      }

      .accordion-body .text-right {
        text-align: right;
      }

      .btn-details {
        margin-top: 10px;
      }

      .total-info {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .total-price {
        font-size: 18px;
        margin-top: 10px;
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
      }

      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }

      .img-small {
        width: 50px; 
        height: auto;
      }

      .border-bottom {
        border-bottom: 1px solid #ccc;
        margin-bottom: 15px;
      }
    </style>

    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Votre panier:</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body\">
        <div class=\"container\">
          <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePanier\" aria-expanded=\"true\" aria-controls=\"collapsePanier\">
                  Votre panier
                </button>
              </h2>
              <div id=\"collapsePanier\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 134
            yield "                    <div class=\"panier\">
                      ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["panier"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 136
                yield "                        <div class=\"row mb-4 border-bottom\">
                          <div class=\"col-md-3\">
                            <div class=\"img-container\">
                              <img src=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 139))), "html", null, true);
                yield "\" alt=\"image\" class=\"img-fluid img-small\">
                            </div>
                          </div>
                          <div class=\"col-md-9\">
                            <div class=\"text-container\">
                              <div class=\"row\">
                                <div class=\"col-md-8\">
                                  <h5>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 146), "html", null, true);
                yield "</h5>
                                  <p class=\"btn-quantity\">Quantité: ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 147), "html", null, true);
                yield "</p>
                                </div>
                                <div class=\"col-md-4 text-right\">
                                  <p>Prix: ";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 150), "html", null, true);
                yield "€/unité</p>
                                  ";
                // line 151
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reduction", [], "any", false, false, false, 151)) {
                    // line 152
                    yield "                                    <p><span style=\"color: red;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reduction", [], "any", false, false, false, 152), "html", null, true);
                    yield "% de réduction</span></p>
                                  ";
                }
                // line 154
                yield "                                </div>
                              </div>
                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                  <p>Sous-total: ";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 158), "html", null, true);
                yield "€</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                  <div class=\"row justify-content-end mb-4\">
                    <div class=\"col-md-6\">
                      <p class=\"total-info\">Nombre d'articles: ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 169, $this->source); })())), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 text-right\">
                      <h3 class=\"total-price\">Prix total: ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixTotalPanier"]) || array_key_exists("prixTotalPanier", $context) ? $context["prixTotalPanier"] : (function () { throw new RuntimeError('Variable "prixTotalPanier" does not exist.', 172, $this->source); })()), "html", null, true);
        yield " €</h3>
                      <a class=\"btn btn-details\" href=\"/user/panier\">Mon Panier</a>
                    </div>
                  </div>
                </div>
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
        return "user/uservue/panieroffcanvas.html.twig";
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
        return array (  284 => 172,  278 => 169,  274 => 167,  267 => 165,  254 => 158,  248 => 154,  242 => 152,  240 => 151,  236 => 150,  230 => 147,  226 => 146,  216 => 139,  211 => 136,  207 => 135,  204 => 134,  200 => 133,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Panier de l'utilisateur</h1>

    <style>
      .offcanvas-header {
        background-color: #fff;
        border-bottom: 1px solid #dee2e6;
      }

      .offcanvas-title {
        color: #000 !important;
        margin-bottom: 0;
      }

      .offcanvas-body {
        padding: 20px;
        background-color: rgb(235, 235, 235);
      }

      .accordion-item {
        background-color: #dee2e6;
        border: none;
        margin-bottom: 10px;
      }

      .accordion-button {
        background-color: #0000;
        color: #212529;
        border: none;
        border-radius: 0;
        padding: 10px 20px;
        text-align: left;
        width: 100%;
      }

      .accordion-button:hover {
        background-color: #000;
        color: #fff;
      }

      .accordion-button.collapsed {
        background-color: #fff;
        color: #000;
      }

      .accordion-body {
        background-color: #fff;
        border-top: 1px solid #7cdf7c;
        padding: 20px;
      }

      .accordion-body .img-container {
        margin-bottom: 10px;
      }

      .accordion-body .img-container img {
        max-width: 100px;
        max-height: 100px;
      }

      .accordion-body .text-container {
        margin-bottom: 10px;
      }

      .accordion-body h5 {
        font-size: 16px;
        margin-bottom: 5px;
      }

      .accordion-body p {
        font-size: 14px;
        margin-bottom: 5px;
      }

      .accordion-body .text-right {
        text-align: right;
      }

      .btn-details {
        margin-top: 10px;
      }

      .total-info {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .total-price {
        font-size: 18px;
        margin-top: 10px;
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
      }

      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }

      .img-small {
        width: 50px; 
        height: auto;
      }

      .border-bottom {
        border-bottom: 1px solid #ccc;
        margin-bottom: 15px;
      }
    </style>

    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Votre panier:</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body\">
        <div class=\"container\">
          <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePanier\" aria-expanded=\"true\" aria-controls=\"collapsePanier\">
                  Votre panier
                </button>
              </h2>
              <div id=\"collapsePanier\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  {% for panier in panierDetails %}
                    <div class=\"panier\">
                      {% for item in panier %}
                        <div class=\"row mb-4 border-bottom\">
                          <div class=\"col-md-3\">
                            <div class=\"img-container\">
                              <img src=\"{{ asset('images/' ~ item.images) }}\" alt=\"image\" class=\"img-fluid img-small\">
                            </div>
                          </div>
                          <div class=\"col-md-9\">
                            <div class=\"text-container\">
                              <div class=\"row\">
                                <div class=\"col-md-8\">
                                  <h5>{{ item.name }}</h5>
                                  <p class=\"btn-quantity\">Quantité: {{ item.quantity }}</p>
                                </div>
                                <div class=\"col-md-4 text-right\">
                                  <p>Prix: {{ item.price }}€/unité</p>
                                  {% if item.reduction %}
                                    <p><span style=\"color: red;\">{{ item.reduction }}% de réduction</span></p>
                                  {% endif %}
                                </div>
                              </div>
                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                  <p>Sous-total: {{ item.subtotal }}€</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      {% endfor %}
                    </div>
                  {% endfor %}
                  <div class=\"row justify-content-end mb-4\">
                    <div class=\"col-md-6\">
                      <p class=\"total-info\">Nombre d'articles: {{ panierDetails|length }}</p>
                    </div>
                    <div class=\"col-md-6 text-right\">
                      <h3 class=\"total-price\">Prix total: {{ prixTotalPanier }} €</h3>
                      <a class=\"btn btn-details\" href=\"/user/panier\">Mon Panier</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

{% endblock %}
", "user/uservue/panieroffcanvas.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\panieroffcanvas.html.twig");
    }
}
