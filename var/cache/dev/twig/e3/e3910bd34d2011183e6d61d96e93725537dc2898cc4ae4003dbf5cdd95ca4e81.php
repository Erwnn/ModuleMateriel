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

/* materiel/modify.html.twig */
class __TwigTemplate_ee0e43fe68fb02cd0b2332dbf3dda55b36d398587a7e3632ca30b0015fb3250b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/modify.html.twig"));

        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        $this->parent = $this->loadTemplate("base.html.twig", "materiel/modify.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 4, $this->source); })()), 'form_start');
        echo "

";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 6, $this->source); })()), "Nom", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Nom du matériel"]]);
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 7, $this->source); })()), "Prix", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => "Prix du matériel"]]);
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 8, $this->source); })()), "Quantite", [], "any", false, false, false, 8), 'row', ["attr" => ["placeholder" => "Quantité du matériel"]]);
        // line 9
        echo "

<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>

";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 13, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "materiel/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  87 => 9,  85 => 8,  81 => 7,  77 => 6,  72 => 4,  69 => 3,  59 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% form_theme formMateriel
'bootstrap_4_layout.html.twig' %} {% block body %}

{{ form_start(formMateriel) }}

{{ form_row(formMateriel.Nom, {'attr':{'placeholder':\"Nom du matériel\"}}) }}
{{ form_row(formMateriel.Prix, {'attr':{'placeholder':\"Prix du matériel\"}}) }}
{{ form_row(formMateriel.Quantite, {'attr':{'placeholder':\"Quantité du matériel\"
}}) }}

<button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>

{{ form_end(formMateriel) }}

{% endblock %}
", "materiel/modify.html.twig", "C:\\Users\\Mephoque\\Desktop\\ModuleMateriel5\\ModuleMateriel5\\templates\\materiel\\modify.html.twig");
    }
}
