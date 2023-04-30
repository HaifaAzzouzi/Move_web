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

/* front.html.twig */
class __TwigTemplate_02b4c70833e374d8acea5a877e57c174 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Category - Abstract</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

   <!-- mobile specific metas
    ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>

<body id=\"top\">


    <!-- preloader
    ================================================== -->
    <div id=\"preloader\">
        <div id=\"loader\"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class=\"s-header\">

        <div class=\"row s-header__content\">

            <div class=\"s-header__logo\">
                <a class=\"logo\" href=\"index.html\">
                    <img src=\"images/logo.svg\" alt=\"Homepage\">
                </a>
            </div>

            <nav class=\"s-header__nav-wrap\">

                <h2 class=\"s-header__nav-heading h6\">Site Navigation</h2>

                <ul class=\"s-header__nav\">
                    <li><a href=\"index.html\" title=\"\">Home</a></li>
                    <li class=\"has-children current\">
                        <a href=\"#0\" title=\"\">Categories</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"category.html\">Design</a></li>
                            <li><a href=\"category.html\">Lifestyle</a></li>
                            <li><a href=\"category.html\">Photography</a></li>
                            <li><a href=\"category.html\">Vacation</a></li>
                            <li><a href=\"category.html\">Work</a></li>
                            <li><a href=\"category.html\">Health</a></li>
                            <li><a href=\"category.html\">Family</a></li>
                            <li><a href=\"category.html\">Relationship</a></li>
                        </ul>
                    </li>
                    <li class=\"has-children\">
                        <a href=\"#0\" title=\"\">Blog</a>
                        <ul class=\"sub-menu\">
                        <li><a href=\"single-video.html\">Video Post</a></li>
                        <li><a href=\"single-audio.html\">Audio Post</a></li>
                        <li><a href=\"single-gallery.html\">Gallery Post</a></li>
                        <li><a href=\"single-standard.html\">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href=\"styles.html\" title=\"\">Styles</a></li>
                    <li><a href=\"about.html\" title=\"\">About</a></li>
                    <li><a href=\"contact.html\" title=\"\">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href=\"#0\" title=\"Close Menu\" class=\"s-header__overlay-close close-mobile-menu\">Close</a>

            </nav> <!-- end header__nav-wrap -->
                   
            <a class=\"s-header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>
            
            <div class=\"s-header__search\">
                    
                <form role=\"search\" method=\"get\" class=\"s-header__search-form\" action=\"#\">
                    <label>
                        <span class=\"hide-content\">Search for:</span>
                        <input type=\"search\" class=\"s-header__search-field\" placeholder=\"Type Your Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                    </label>
                    <input type=\"submit\" class=\"s-header__search-submit\" value=\"Search\">
                </form>

                <a href=\"#0\" title=\"Close Search\" class=\"s-header__overlay-close\">Close</a>

            </div> <!-- end search wrap -->\t

            <a class=\"s-header__search-trigger\" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z\"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->

    ";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "

    <!-- footer
    ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">

            <div class=\"row\">

                <div class=\"column large-4 medium-6 tab-12 s-footer__info\">

                    <h5>About Our Site</h5>

                    <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__site-links\">

                    <h5>Site Links</h5>

                    <ul>
                        <li><a href=\"#0\">About Us</a></li>
                        <li><a href=\"#0\">Blog</a></li>
                        <li><a href=\"#0\">FAQ</a></li>
                        <li><a href=\"#0\">Terms</a></li>
                        <li><a href=\"#0\">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->  

                <div class=\"column large-2 medium-3 tab-6 s-footer__social-links\">

                    <h5>Social</h5>

                    <ul>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Dribbble</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links --> 

                <div class=\"column large-4 medium-12 s-footer__subscribe\">

                    <h5>Subscribe</h5>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class=\"subscribe-form\">
                
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"dEmail\" class=\"email\" id=\"mc-email\" placeholder=\"Type &amp; press enter\" required=\"\"> 
                
                            <input type=\"submit\" name=\"subscribe\" >
                
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                
                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"column\">
                    <div class=\"ss-copyright\">
                        <span>© Copyright Abstract 2020</span> 
                        <span>Design by <a href=\"https://www.styleshout.com/\">StyleShout</a></span>\t\t         \t
                    </div> <!-- end ss-copyright -->
                </div>
            </div> 

            <div class=\"ss-go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z\"/></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

   </footer> <!-- end s-footer -->

    ";
        // line 216
        $this->displayBlock('js', $context, $blocks);
        // line 224
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <!-- CSS
    ================================================== -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendor.css"), "html", null, true);
        echo "\">

    <!-- script
    ================================================== -->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>

    <!-- favicons
    ================================================== -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon-16x16.png\">
    <link rel=\"manifest\" href=\"site.webmanifest\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 121
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 216
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 217
        echo "   <!-- Java Script
   ================================================== --> 
   <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 221,  349 => 220,  345 => 219,  341 => 217,  331 => 216,  320 => 121,  310 => 120,  290 => 24,  283 => 20,  279 => 19,  275 => 17,  265 => 16,  252 => 224,  250 => 216,  155 => 123,  153 => 120,  65 => 34,  63 => 16,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Category - Abstract</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

   <!-- mobile specific metas
    ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block stylesheets %}
    <!-- CSS
    ================================================== -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/vendor.css')}}\">

    <!-- script
    ================================================== -->
    <script src=\"{{ asset('js/modernizr.js')}}\"></script>

    <!-- favicons
    ================================================== -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon-16x16.png\">
    <link rel=\"manifest\" href=\"site.webmanifest\">

    {% endblock %}

</head>

<body id=\"top\">


    <!-- preloader
    ================================================== -->
    <div id=\"preloader\">
        <div id=\"loader\"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class=\"s-header\">

        <div class=\"row s-header__content\">

            <div class=\"s-header__logo\">
                <a class=\"logo\" href=\"index.html\">
                    <img src=\"images/logo.svg\" alt=\"Homepage\">
                </a>
            </div>

            <nav class=\"s-header__nav-wrap\">

                <h2 class=\"s-header__nav-heading h6\">Site Navigation</h2>

                <ul class=\"s-header__nav\">
                    <li><a href=\"index.html\" title=\"\">Home</a></li>
                    <li class=\"has-children current\">
                        <a href=\"#0\" title=\"\">Categories</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"category.html\">Design</a></li>
                            <li><a href=\"category.html\">Lifestyle</a></li>
                            <li><a href=\"category.html\">Photography</a></li>
                            <li><a href=\"category.html\">Vacation</a></li>
                            <li><a href=\"category.html\">Work</a></li>
                            <li><a href=\"category.html\">Health</a></li>
                            <li><a href=\"category.html\">Family</a></li>
                            <li><a href=\"category.html\">Relationship</a></li>
                        </ul>
                    </li>
                    <li class=\"has-children\">
                        <a href=\"#0\" title=\"\">Blog</a>
                        <ul class=\"sub-menu\">
                        <li><a href=\"single-video.html\">Video Post</a></li>
                        <li><a href=\"single-audio.html\">Audio Post</a></li>
                        <li><a href=\"single-gallery.html\">Gallery Post</a></li>
                        <li><a href=\"single-standard.html\">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href=\"styles.html\" title=\"\">Styles</a></li>
                    <li><a href=\"about.html\" title=\"\">About</a></li>
                    <li><a href=\"contact.html\" title=\"\">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href=\"#0\" title=\"Close Menu\" class=\"s-header__overlay-close close-mobile-menu\">Close</a>

            </nav> <!-- end header__nav-wrap -->
                   
            <a class=\"s-header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>
            
            <div class=\"s-header__search\">
                    
                <form role=\"search\" method=\"get\" class=\"s-header__search-form\" action=\"#\">
                    <label>
                        <span class=\"hide-content\">Search for:</span>
                        <input type=\"search\" class=\"s-header__search-field\" placeholder=\"Type Your Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                    </label>
                    <input type=\"submit\" class=\"s-header__search-submit\" value=\"Search\">
                </form>

                <a href=\"#0\" title=\"Close Search\" class=\"s-header__overlay-close\">Close</a>

            </div> <!-- end search wrap -->\t

            <a class=\"s-header__search-trigger\" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z\"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->

    {% block body %}

    {% endblock %}


    <!-- footer
    ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">

            <div class=\"row\">

                <div class=\"column large-4 medium-6 tab-12 s-footer__info\">

                    <h5>About Our Site</h5>

                    <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__site-links\">

                    <h5>Site Links</h5>

                    <ul>
                        <li><a href=\"#0\">About Us</a></li>
                        <li><a href=\"#0\">Blog</a></li>
                        <li><a href=\"#0\">FAQ</a></li>
                        <li><a href=\"#0\">Terms</a></li>
                        <li><a href=\"#0\">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->  

                <div class=\"column large-2 medium-3 tab-6 s-footer__social-links\">

                    <h5>Social</h5>

                    <ul>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Dribbble</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links --> 

                <div class=\"column large-4 medium-12 s-footer__subscribe\">

                    <h5>Subscribe</h5>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class=\"subscribe-form\">
                
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"dEmail\" class=\"email\" id=\"mc-email\" placeholder=\"Type &amp; press enter\" required=\"\"> 
                
                            <input type=\"submit\" name=\"subscribe\" >
                
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                
                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"column\">
                    <div class=\"ss-copyright\">
                        <span>© Copyright Abstract 2020</span> 
                        <span>Design by <a href=\"https://www.styleshout.com/\">StyleShout</a></span>\t\t         \t
                    </div> <!-- end ss-copyright -->
                </div>
            </div> 

            <div class=\"ss-go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z\"/></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

   </footer> <!-- end s-footer -->

    {% block js %}
   <!-- Java Script
   ================================================== --> 
   <script src=\"{{ asset('assets/js/jquery-3.2.1.min.js')}}\"></script>
   <script src=\"{{ asset('assets/js/plugins.js')}}\"></script>
   <script src=\"{{ asset('assets/js/main.js')}}\"></script>

    {% endblock %}

</body>

</html>", "front.html.twig", "C:\\Users\\mehdi\\OneDrive\\Bureau\\Haifa\\templates\\front.html.twig");
    }
}
