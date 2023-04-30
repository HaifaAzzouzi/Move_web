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

/* event/event.html.twig */
class __TwigTemplate_b337bbe6cb5b6889c56d9dfbe1a03455 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/event.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "
<section class=\"s-content s-content--single\">
        <div class=\"row\">
            <div class=\"column large-12\">

                <article class=\"s-post entry format-standard\">

                    <div class=\"s-content__media\">
                        <div class=\"s-content__post-thumb\">
                           <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class=\"s-content__primary\">

                        <h2 class=\"s-content__title s-content__title--post\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>

                        <ul class=\"s-content__post-meta\">
                            <li class=\"date\">";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "datedeb", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "datedeb", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</li>
                            <li class=\"date\">";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "datefin", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "datefin", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</li>
                            <li class=\"cat\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventplace_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "place", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "place", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></li>
                        </ul>

                        <p class=\"lead\">
                        ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "

                         <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article>

            </div> <!-- end column -->
        </div> <!-- end row -->


        <!-- comments
        ================================================== -->
        

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  102 => 26,  98 => 25,  94 => 24,  88 => 21,  79 => 15,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}



{% block body %}

<section class=\"s-content s-content--single\">
        <div class=\"row\">
            <div class=\"column large-12\">

                <article class=\"s-post entry format-standard\">

                    <div class=\"s-content__media\">
                        <div class=\"s-content__post-thumb\">
                           <img src=\"{{asset('uploads/'~ event.image)}}\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class=\"s-content__primary\">

                        <h2 class=\"s-content__title s-content__title--post\">{{ event.nom }}</h2>

                        <ul class=\"s-content__post-meta\">
                            <li class=\"date\">{{ event.datedeb ? event.datedeb|date('Y-m-d') : '' }}</li>
                            <li class=\"date\">{{ event.datefin ? event.datefin|date('Y-m-d') : '' }}</li>
                            <li class=\"cat\"><a href=\"{{ path(\"app_eventplace_show\", {'id': event.place.id}) }}\">{{ event.place.nom }}</a></li>
                        </ul>

                        <p class=\"lead\">
                        {{ event.description }}

                         <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article>

            </div> <!-- end column -->
        </div> <!-- end row -->


        <!-- comments
        ================================================== -->
        

    </section>

{% endblock %}", "event/event.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\event\\event.html.twig");
    }
}
