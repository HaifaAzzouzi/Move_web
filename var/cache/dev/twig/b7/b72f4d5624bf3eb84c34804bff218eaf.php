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

/* event/addEvent.html.twig */
class __TwigTemplate_4c11a348e40ad909bf05761b818700cf extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addEvent.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/addEvent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
 




<section class=\"s-content s-styles\">




                     <div class=\"row\">

            <div class=\"column large-12 tab-12\">

                <h3 class=\"h-add-bottom\">Form Styles</h3>
                

                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


                            <form class=\"user\">
                                <div class=\"form-group\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'label', ["label" => "Nom du event"]);
        echo "
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "datedeb", [], "any", false, false, false, 34), 'label', ["label" => "Date de Debut"]);
        echo "
                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "datedeb", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control form-control-user ", "placeholder" => "DD/MM/YYYY"]]);
        echo "
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "datedeb", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "datefin", [], "any", false, false, false, 39), 'label', ["label" => "Date de Fin"]);
        echo "
                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "datefin", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control form-control-user ", "placeholder" => "DD/MM/YYYY"]]);
        echo "
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "datefin", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 46
        echo "                                    <span class=\"text-danger\" >";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "</span>

                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'label', ["label" => "Description du event"]);
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "description"]]);
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "place", [], "any", false, false, false, 56), 'label', ["label" => "place du event"]);
        echo "
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "place", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "place"]]);
        echo "
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "place", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>

                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "submit", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "cancel", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "





                                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                            </form>

            </div>

            

        </div>


</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/addEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 68,  181 => 62,  177 => 61,  171 => 58,  167 => 57,  163 => 56,  156 => 52,  152 => 51,  148 => 50,  140 => 46,  133 => 41,  129 => 40,  125 => 39,  119 => 36,  115 => 35,  111 => 34,  104 => 30,  100 => 29,  96 => 28,  88 => 23,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}

 




<section class=\"s-content s-styles\">




                     <div class=\"row\">

            <div class=\"column large-12 tab-12\">

                <h3 class=\"h-add-bottom\">Form Styles</h3>
                

                {{ form_start(form, {'attr':{'novalidate':'novalidate'}}) }}


                            <form class=\"user\">
                                <div class=\"form-group\">
                                    {{ form_label(form.nom, 'Nom du event') }}
                                    {{ form_widget(form.nom ,{'attr': {'class': 'form-control','placeholder': 'Nom'}}) }}
                                    {{ form_errors(form.nom,{'attr': {'class':'text-danger'}}) }}
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        {{ form_label(form.datedeb, \"Date de Debut\" ) }}
                                        {{ form_widget(form.datedeb, {'attr': {'class': 'form-control form-control-user ','placeholder': 'DD/MM/YYYY'}}) }}
                                        {{ form_errors(form.datedeb,{'attr': {'class':'text-danger'}}) }}
                                    </div>
                                    <div class=\"col-sm-6\">
                                        {{ form_label(form.datefin, \"Date de Fin\" ) }}
                                        {{ form_widget(form.datefin, {'attr': {'class': 'form-control form-control-user ','placeholder': 'DD/MM/YYYY'}}) }}
                                        {{ form_errors(form.datefin,{'attr': {'class':'text-danger'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    {# {{ form_label(form.image, 'Image', ) }} #}
                                    <span class=\"text-danger\" >{{ form_row(form.image,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}</span>

                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.description, 'Description du event') }}
                                    {{ form_widget(form.description ,{'attr': {'class': 'form-control','placeholder': 'description'}}) }}
                                    {{ form_errors(form.description,{'attr': {'class':'text-danger'}}) }}
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(form.place, 'place du event') }}
                                    {{ form_widget(form.place ,{'attr': {'class': 'form-control','placeholder': 'place'}}) }}
                                    {{ form_errors(form.place,{'attr': {'class':'text-danger'}}) }}
                                </div>

                                {{ form_widget(form.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                                {{ form_widget(form.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}





                                {{ form_end(form) }}
                            </form>

            </div>

            

        </div>


</section>

{% endblock %}", "event/addEvent.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\event\\addEvent.html.twig");
    }
}
