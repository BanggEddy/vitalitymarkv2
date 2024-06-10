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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/panieroffcanvas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/panieroffcanvas.html.twig"));

        // line 1
        yield "<style>
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
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 124
            yield "              <div class=\"row mb-4 border-bottom\">
              ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["panier"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                yield "                <div class=\"col-md-3\">
                  <div class=\"img-container\">
                    <img src=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "images", [], "array", false, false, false, 128))), "html", null, true);
                yield "\" alt=\"image\" class=\"img-fluid img-small\">
                  </div>
                </div>
                <div class=\"col-md-9\">
                  <div class=\"text-container\">
                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <h5>";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 135), "html", null, true);
                yield "</h5>

                        <p class=\"btn-quantity\">Quantité: ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "array", false, false, false, 137), "html", null, true);
                yield "</p>
                      </div>
                      <div class=\"col-md-4 text-right\">
                        <p>Prix: ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "array", false, false, false, 140), "html", null, true);
                yield "/unité </p>
                            <p><span style=\"color: red;\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reduction", [], "array", false, false, false, 141), "html", null, true);
                yield " % de réduction</span></p>

                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <p>sous-total: ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "array", false, false, false, 147), "html", null, true);
                yield "</p>
                      </div>
                    </div>
                  </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "              <div class=\"row justify-content-end mb-4\">
                <div class=\"col-md-6\">
                  <p class=\"total-info\">Nombre d'articles: ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 157, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-6 text-right\">
                  <h3 class=\"total-price\">Prix total: ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixTotalPanier"]) || array_key_exists("prixTotalPanier", $context) ? $context["prixTotalPanier"] : (function () { throw new RuntimeError('Variable "prixTotalPanier" does not exist.', 160, $this->source); })()), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  246 => 160,  240 => 157,  236 => 155,  229 => 153,  217 => 147,  208 => 141,  204 => 140,  198 => 137,  193 => 135,  183 => 128,  179 => 126,  175 => 125,  172 => 124,  168 => 123,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
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
              <div class=\"row mb-4 border-bottom\">
              {% for item in panier %}
                <div class=\"col-md-3\">
                  <div class=\"img-container\">
                    <img src=\"{{ asset('images/' ~ item['images']) }}\" alt=\"image\" class=\"img-fluid img-small\">
                  </div>
                </div>
                <div class=\"col-md-9\">
                  <div class=\"text-container\">
                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <h5>{{ item['name'] }}</h5>

                        <p class=\"btn-quantity\">Quantité: {{ item['quantity'] }}</p>
                      </div>
                      <div class=\"col-md-4 text-right\">
                        <p>Prix: {{ item['price'] }}/unité </p>
                            <p><span style=\"color: red;\">{{ item['reduction'] }} % de réduction</span></p>

                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <p>sous-total: {{ item['subtotal'] }}</p>
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
", "user/uservue/panieroffcanvas.html.twig", "C:\\Users\\David\\Desktop\\vitalitymarkv2\\templates\\user\\uservue\\panieroffcanvas.html.twig");
    }
}
