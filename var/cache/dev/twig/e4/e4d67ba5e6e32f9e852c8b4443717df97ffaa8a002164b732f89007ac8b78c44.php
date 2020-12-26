<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* materiel/materiel.html.twig */
class __TwigTemplate_508de1c6fe0786b904fd70032843c8f94e7e8e8977664abacc85cd44190ec7b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/materiel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/materiel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/materiel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link
  rel=\"stylesheet\"
  href=\"//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css\"
/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<h1 class=\"display-3\">Liste du matériel</h1>

<table id=\"materielTable\" class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 26
            echo "
        ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 27) > 0)) {
                // line 28
                echo "            ";
                $context["varMateriel"] = ["id" => twig_get_attribute($this->env, $this->source,                 // line 29
$context["materiel"], "id", [], "any", false, false, false, 29), "nom" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["materiel"], "nom", [], "any", false, false, false, 30), "prix" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["materiel"], "prix", [], "any", false, false, false, 31), "quantite" => twig_get_attribute($this->env, $this->source,                 // line 32
$context["materiel"], "quantite", [], "any", false, false, false, 32), "createdAt" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 33
$context["materiel"], "createdAt", [], "any", false, false, false, 33), "d/m/Y")];
                // line 35
                echo "            <tr>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
            <td>
                <a href=\"javascript:showMateriel(";
                // line 40
                echo twig_escape_filter($this->env, json_encode((isset($context["varMateriel"]) || array_key_exists("varMateriel", $context) ? $context["varMateriel"] : (function () { throw new RuntimeError('Variable "varMateriel" does not exist.', 40, $this->source); })())), "html", null, true);
                echo "  )\" class=\"btn btn-info\">Voir</a>
                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyMateriel", ["id" => twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a>
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrementMateriel", ["id" => twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Décrémenter</a>
            </td>
            </tr>
        ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
  </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "<script
  src=\"https://code.jquery.com/jquery-3.5.1.js\"
  integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
  crossorigin=\"anonymous\"
></script>
<script src=\"//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
<script src=\"datatable.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "materiel/materiel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 52,  178 => 51,  164 => 47,  158 => 46,  151 => 42,  147 => 41,  143 => 40,  138 => 38,  134 => 37,  130 => 36,  127 => 35,  125 => 33,  124 => 32,  123 => 31,  122 => 30,  121 => 29,  119 => 28,  117 => 27,  114 => 26,  110 => 25,  94 => 11,  84 => 10,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
<link
  rel=\"stylesheet\"
  href=\"//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css\"
/>
{% endblock %}

{% block body %}

<h1 class=\"display-3\">Liste du matériel</h1>

<table id=\"materielTable\" class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    {% for materiel in materiels %}

        {% if materiel.quantite > 0 %}
            {% set varMateriel =
                {id:materiel.id, 
                nom:materiel.nom, 
                prix:materiel.prix,
                quantite:materiel.quantite,
                createdAt:materiel.createdAt|date('d/m/Y')} 
            %}
            <tr>
            <td>{{ materiel.nom }}</td>
            <td>{{ materiel.prix }}</td>
            <td>{{ materiel.quantite }}</td>
            <td>
                <a href=\"javascript:showMateriel({{varMateriel | json_encode}}  )\" class=\"btn btn-info\">Voir</a>
                <a href=\"{{ path('modifyMateriel', { id: materiel.id }) }}\" class=\"btn btn-warning\">Modifier</a>
                <a href=\"{{ path('decrementMateriel', { id: materiel.id }) }}\" class=\"btn btn-danger\">Décrémenter</a>
            </td>
            </tr>
        {% endif %}
    {% endfor %}

  </tbody>
</table>

{% endblock %} {% block javascripts %}
<script
  src=\"https://code.jquery.com/jquery-3.5.1.js\"
  integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
  crossorigin=\"anonymous\"
></script>
<script src=\"//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
<script src=\"datatable.js\"></script>
{% endblock %}
", "materiel/materiel.html.twig", "C:\\Users\\Mephoque\\Desktop\\ModuleMateriel5\\ModuleMateriel5\\templates\\materiel\\materiel.html.twig");
    }
}
