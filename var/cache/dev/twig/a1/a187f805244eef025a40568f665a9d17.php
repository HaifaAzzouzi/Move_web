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

/* eventplace/edit.html.twig */
class __TwigTemplate_ceab45b4c21d317a71e4ef876a4861b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventplace/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventplace/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eventplace/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Edit Eventplace";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <h1>Edit Eventplace</h1>

    <div class=\"container\">



        <div class=\"card o-hidden border-0 shadow-lg my-2\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">

                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Create a Place</h1>
                            </div>

                            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


                            <form class=\"user\">
                                <div class=\"form-group\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'label', ["label" => "Nom du place"]);
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "codep", [], "any", false, false, false, 44), 'label', ["label" => "Code Postal"]);
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "codep", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-user ", "placeholder" => "Code Postal"]]);
        echo "
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "codep", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "adresse", [], "any", false, false, false, 49), 'label', ["label" => "Adresse"]);
        echo "
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "adresse", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control form-control-user ", "placeholder" => "Adresse"]]);
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>
                                </div>
                                

                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "submit", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "cancel", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "





                                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                            </form>



                        </div>
                    </div>

                    <div class=\"col-lg-5\">
                        <div class=\"p-5\">
                        <a class=\"form-control btn btn-info btn-sm\"  href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventplace_index");
        echo "\">back to list</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 78
        echo twig_include($this->env, $context, "eventplace/_delete_form.html.twig");
        echo "
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "eventplace/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 78,  223 => 73,  210 => 63,  201 => 57,  197 => 56,  189 => 51,  185 => 50,  181 => 49,  175 => 46,  171 => 45,  167 => 44,  160 => 40,  156 => 39,  152 => 38,  144 => 33,  125 => 16,  115 => 15,  102 => 11,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Eventplace{% endblock %}

{% block stylesheets %}

    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">

{% endblock %}

{% block body %}
    <h1>Edit Eventplace</h1>

    <div class=\"container\">



        <div class=\"card o-hidden border-0 shadow-lg my-2\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">

                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Create a Place</h1>
                            </div>

                            {{ form_start(form, {'attr':{'novalidate':'novalidate'}}) }}


                            <form class=\"user\">
                                <div class=\"form-group\">
                                    {{ form_label(form.nom, 'Nom du place') }}
                                    {{ form_widget(form.nom ,{'attr': {'class': 'form-control','placeholder': 'Nom'}}) }}
                                    {{ form_errors(form.nom,{'attr': {'class':'text-danger'}}) }}
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        {{ form_label(form.codep, \"Code Postal\" ) }}
                                        {{ form_widget(form.codep, {'attr': {'class': 'form-control form-control-user ','placeholder': 'Code Postal'}}) }}
                                        {{ form_errors(form.codep,{'attr': {'class':'text-danger'}}) }}
                                    </div>
                                    <div class=\"col-sm-6\">
                                        {{ form_label(form.adresse, \"Adresse\" ) }}
                                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control form-control-user ','placeholder': 'Adresse'}}) }}
                                        {{ form_errors(form.adresse,{'attr': {'class':'text-danger'}}) }}
                                    </div>
                                </div>
                                

                                {{ form_widget(form.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                                {{ form_widget(form.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}





                                {{ form_end(form) }}
                            </form>



                        </div>
                    </div>

                    <div class=\"col-lg-5\">
                        <div class=\"p-5\">
                        <a class=\"form-control btn btn-info btn-sm\"  href=\"{{ path('app_eventplace_index') }}\">back to list</a>
                        </div>
                    </div>
                </div>
            </div>
            {{ include('eventplace/_delete_form.html.twig') }}
        </div>

    </div>

{% endblock %}
", "eventplace/edit.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\eventplace\\edit.html.twig");
    }
}
