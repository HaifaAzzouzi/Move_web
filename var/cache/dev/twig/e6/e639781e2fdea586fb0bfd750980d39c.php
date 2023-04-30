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

/* event/ajax.html.twig */
class __TwigTemplate_5eb3cb5e00491c5465e2ded2a6f04f4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/ajax.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/ajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 2
            echo "                <div class=\"grid-sizer\"></div>

                <article class=\"brick entry format-standard animate-this\">
    
                    <div class=\"entry__thumb\">
                        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventfront_details", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"thumb-link\">
                           <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\">
                        </a>
                    </div> <!-- end entry__thumb -->
    
                    <div class=\"entry__text\">
                        <div class=\"entry__header\">
    
                            <div class=\"entry__meta\">
                                <span class=\"entry__cat-links\">
                                    Emplacement: <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventplace_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "place", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "place", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</a> 
                                    
                                </span>
                            </div>
    
                            <h1 class=\"entry__title\"><a href=\"single-standard.html\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></h1>
                            
                        </div>
                        <div class=\"entry__excerpt\">
                            <p>
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "
                            </p>
                        </div>
                    </div> <!-- end entry__text -->
    
                </article>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "event/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  80 => 22,  70 => 17,  58 => 8,  54 => 7,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for var in events %}
                <div class=\"grid-sizer\"></div>

                <article class=\"brick entry format-standard animate-this\">
    
                    <div class=\"entry__thumb\">
                        <a href=\"{{ path(\"app_eventfront_details\", {'id': var.id})  }}\" class=\"thumb-link\">
                           <img src=\"{{asset('uploads/'~ var.image)}}\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\">
                        </a>
                    </div> <!-- end entry__thumb -->
    
                    <div class=\"entry__text\">
                        <div class=\"entry__header\">
    
                            <div class=\"entry__meta\">
                                <span class=\"entry__cat-links\">
                                    Emplacement: <a href=\"{{ path(\"app_eventplace_show\", {'id': var.place.id}) }}\">{{var.place.nom}}</a> 
                                    
                                </span>
                            </div>
    
                            <h1 class=\"entry__title\"><a href=\"single-standard.html\">{{ var.nom }}</a></h1>
                            
                        </div>
                        <div class=\"entry__excerpt\">
                            <p>
                            {{ var.description }}
                            </p>
                        </div>
                    </div> <!-- end entry__text -->
    
                </article>
                
                {% endfor %}", "event/ajax.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\event\\ajax.html.twig");
    }
}
