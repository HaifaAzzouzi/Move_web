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

/* event/events.html.twig */
class __TwigTemplate_bfc0c42f9ae6aed73c86c089452d6dc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/events.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/events.html.twig", 1);
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

 <section class=\"s-pageheader\">
        <div class=\"row current-cat\">
            <div class=\"column\">
                <h1 class=\"h2\">Events</h1>
            </div>
        

    </section>



    <!-- masonry
    ================================================== -->
    <section class=\"s-bricks with-top-sep\">
    
        <div class=\"masonry\">
            <form action=\"#\" class=\"nk-form nk-form-style-1\" style=\"margin-top:10px;margin-bottom:20px; margin-left:630px;\" novalidate=\"novalidate\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search for post\" id=\"search\">

                        </div>
                    </form>
            <!-- brick-wrapper -->
            <div class=\"bricks-wrapper h-group\">
            
                
                 <div  id=\"all\">
                    ";
        // line 35
        $this->loadTemplate("event/ajax.html.twig", "event/events.html.twig", 35)->display($context);
        // line 36
        echo "                </div>
                <div class=\"row vertical-gap\" id=\"search\">
                </div>
                
                

                
 
            </div> <!-- end brick-wrapper --> 
 
        </div> <!-- end masonry -->

        <div class=\"row\">
            <div class=\"column large-12\">
                <nav class=\"pgn\">
                    <ul>
                        <li>
                            <a class=\"pgn__prev\" href=\"#0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z\"></path></svg>
                            </a>
                        </li>
                        <li><a class=\"pgn__num\" href=\"#0\">1</a></li>
                        <li><span class=\"pgn__num current\">2</span></li>
                        <li><a class=\"pgn__num\" href=\"#0\">3</a></li>
                        <li><a class=\"pgn__num\" href=\"#0\">4</a></li>
                        <li><a class=\"pgn__num\" href=\"#0\">5</a></li>
                        <li><span class=\"pgn__num dots\">…</span></li>
                        <li><a class=\"pgn__num\" href=\"#0\">8</a></li>
                        <li>
                            <a class=\"pgn__next\" href=\"#0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z\"></path></svg>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end pgn -->
            </div> <!-- end column -->
        </div> <!-- end row -->

    </section>


<script
            src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
    </script>

    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_searchevent");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 94,  145 => 78,  101 => 36,  99 => 35,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}



{% block body %}


 <section class=\"s-pageheader\">
        <div class=\"row current-cat\">
            <div class=\"column\">
                <h1 class=\"h2\">Events</h1>
            </div>
        

    </section>



    <!-- masonry
    ================================================== -->
    <section class=\"s-bricks with-top-sep\">
    
        <div class=\"masonry\">
            <form action=\"#\" class=\"nk-form nk-form-style-1\" style=\"margin-top:10px;margin-bottom:20px; margin-left:630px;\" novalidate=\"novalidate\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search for post\" id=\"search\">

                        </div>
                    </form>
            <!-- brick-wrapper -->
            <div class=\"bricks-wrapper h-group\">
            
                
                 <div  id=\"all\">
                    {% include 'event/ajax.html.twig' %}
                </div>
                <div class=\"row vertical-gap\" id=\"search\">
                </div>
                
                

                
 
            </div> <!-- end brick-wrapper --> 
 
        </div> <!-- end masonry -->

        <div class=\"row\">
            <div class=\"column large-12\">
                <nav class=\"pgn\">
                    <ul>
                        <li>
                            <a class=\"pgn__prev\" href=\"#0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z\"></path></svg>
                            </a>
                        </li>
                        <li><a class=\"pgn__num\" href=\"#0\">1</a></li>
                        <li><span class=\"pgn__num current\">2</span></li>
                        <li><a class=\"pgn__num\" href=\"#0\">3</a></li>
                        <li><a class=\"pgn__num\" href=\"#0\">4</a></li>
                        <li><a class=\"pgn__num\" href=\"#0\">5</a></li>
                        <li><span class=\"pgn__num dots\">…</span></li>
                        <li><a class=\"pgn__num\" href=\"#0\">8</a></li>
                        <li>
                            <a class=\"pgn__next\" href=\"#0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z\"></path></svg>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end pgn -->
            </div> <!-- end column -->
        </div> <!-- end row -->

    </section>


<script
            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
    </script>

    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"{{ path('app_searchevent') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>

{% endblock %}", "event/events.html.twig", "C:\\Users\\Hayfa\\Downloads\\Haifa1\\Haifa\\templates\\event\\events.html.twig");
    }
}
