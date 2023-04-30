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

/* event/index.html.twig */
class __TwigTemplate_d16bc52e9b84f9ae3c29c0704f802410 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        echo "Event index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "              <div class=\"alert alert-success\"  id=\"flash-message\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "              <div class=\"alert alert-danger\"  id=\"flash-message\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
          <script>
    // Set a timer to hide the flash message after 3 seconds
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000);
</script>
    <h1>Event index</h1>
    ";
        // line 24
        echo "<div class=\"card-body\">

    <div class=\"btn btn-outline-info \" style=\"margin-left:900px;\"><a class=\"Comment\"  href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_date");
        echo "\">Trier par Date Debut</a></div>
    <div class=\"btn btn-outline-info \"><a class=\"Comment\"  href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_dateFin");
        echo "\">Trier par Date Fin</a></div>

    <div class=\"btn btn-outline-info \"><a class=\"Comment\"  href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_nom");
        echo "\">Trier par Nom</a></div>

    <div class=\"table-responsive\">
    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Image</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["event"], "datedeb", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "datedeb", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["event"], "datefin", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "datefin", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 51))), "html", null, true);
            echo "\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\"></td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">show</a>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

    </div>
    </div>

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        echo "\" class=\"btn btn-outline-secondary\" >Create new</a>


    <style>
                #calendrier{
                    width: 80%;
                    margin: auto;
                }
            </style>
            <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">
            <h1>Calendar events</h1>
            <div id=\"calendrier\"></div>


            <script>
                window.onload = () =>{
                    let calendarElt = document.querySelector(\"#calendrier\")
                    let calendar = new FullCalendar.Calendar(calendarElt,{
                        initialView: 'dayGridMonth',
                        locale: 'fr',
                        timeZone: 'Europe/Paris',
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek'
                        },
                        events: ";
        // line 96
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })());
        echo "
                    })
                    calendar.render();
                }
            </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 96,  223 => 69,  215 => 63,  206 => 59,  197 => 55,  193 => 54,  188 => 52,  184 => 51,  180 => 50,  176 => 49,  172 => 48,  168 => 47,  165 => 46,  160 => 45,  141 => 29,  136 => 27,  132 => 26,  128 => 24,  115 => 12,  106 => 10,  101 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event index{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
              <div class=\"alert alert-success\"  id=\"flash-message\">{{ message }}</div>
          {% endfor %}
          {% for message in app.flashes('danger') %}
              <div class=\"alert alert-danger\"  id=\"flash-message\">{{ message }}</div>
          {% endfor %}

          <script>
    // Set a timer to hide the flash message after 3 seconds
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000);
</script>
    <h1>Event index</h1>
    {# <div class=\"btn btn-warning btn-circle\"><a class=\"Comment\"  href=\"{{ path('app_event_nom') }}\">Trier par sujet</a></div> #}
<div class=\"card-body\">

    <div class=\"btn btn-outline-info \" style=\"margin-left:900px;\"><a class=\"Comment\"  href=\"{{ path('app_event_date') }}\">Trier par Date Debut</a></div>
    <div class=\"btn btn-outline-info \"><a class=\"Comment\"  href=\"{{ path('app_event_dateFin') }}\">Trier par Date Fin</a></div>

    <div class=\"btn btn-outline-info \"><a class=\"Comment\"  href=\"{{ path('app_event_nom') }}\">Trier par Nom</a></div>

    <div class=\"table-responsive\">
    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Image</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for event in events %}
            <tr>
                <td>{{ event.id }}</td>
                <td>{{ event.nom }}</td>
                <td>{{ event.datedeb ? event.datedeb|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ event.datefin ? event.datefin|date('Y-m-d H:i:s') : '' }}</td>
                <td><img src=\"{{asset('uploads/'~ event.image)}}\" height=\"180\"  class=\"user_pic rounded img-raised\" alt=\"User\"></td>
                <td>{{ event.description }}</td>
                <td>
                    <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-outline-secondary\">show</a>
                    <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-outline-secondary\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
    </div>

    <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-outline-secondary\" >Create new</a>


    <style>
                #calendrier{
                    width: 80%;
                    margin: auto;
                }
            </style>
            <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">
            <h1>Calendar events</h1>
            <div id=\"calendrier\"></div>


            <script>
                window.onload = () =>{
                    let calendarElt = document.querySelector(\"#calendrier\")
                    let calendar = new FullCalendar.Calendar(calendarElt,{
                        initialView: 'dayGridMonth',
                        locale: 'fr',
                        timeZone: 'Europe/Paris',
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek'
                        },
                        events: {{ data|raw }}
                    })
                    calendar.render();
                }
            </script>

{% endblock %}
", "event/index.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\event\\index.html.twig");
    }
}
