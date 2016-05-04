<?php

/* partials/base.html.twig */
class __TwigTemplate_ee097facc0c7bc5afaf54514dd548256a6175cae0ca2eabf7e0715dec127c1ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tSolid State by HTML5 UP
\thtml5up.net | @n33co
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Solid State by HTML5 UP</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo " 
        <style>
            ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) > 0)) {
            // line 29
            echo "            body{
                background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 30
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array());
            echo "\");
            }
            
            @media screen and (max-width: 1280px) {
                #banner {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 35
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array());
            echo "\");
                }
            }
            
            @media screen and (max-width: 1280px) {

\t\t#wrapper > header {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 42
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background_image", array()), array(), "array"), "url", array());
            echo "\");
\t\t}

\t}
            
            ";
        }
        // line 48
        echo "        </style>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">          
            ";
        // line 53
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 53)->display($context);
        echo "         
            ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "        </div>
        
        <!-- Scripts -->
        ";
        // line 63
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 64
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.min.js"), "method");
        // line 65
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.scrollex.min.js"), "method");
        // line 66
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 67
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 68
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    </body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 15
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 16
            echo "        ";
        }
        // line 17
        echo "        
        ";
        // line 18
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css", 1 => 103), "method");
        // line 19
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  166 => 56,  162 => 25,  159 => 24,  156 => 23,  153 => 22,  150 => 21,  147 => 20,  144 => 19,  142 => 18,  139 => 17,  136 => 16,  133 => 15,  130 => 14,  127 => 13,  117 => 68,  114 => 67,  111 => 66,  108 => 65,  105 => 64,  103 => 63,  98 => 60,  96 => 59,  93 => 58,  91 => 56,  88 => 55,  86 => 54,  82 => 53,  75 => 48,  66 => 42,  56 => 35,  48 => 30,  45 => 29,  43 => 28,  37 => 26,  35 => 13,  21 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <!--*/
/* 	Solid State by HTML5 UP*/
/* 	html5up.net | @n33co*/
/* 	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)*/
/* -->*/
/* <html>*/
/*     <head>*/
/*         <title>Solid State by HTML5 UP</title>*/
/*         <meta charset="utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         */
/*         {% block stylesheets %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}*/
/*             {% do assets.addJs('theme://assets/js/ie/html5shiv.js') %}*/
/*         {% endif %}*/
/*         */
/*         {% do assets.addCss('theme://assets/css/main.css', 103) %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}*/
/*             {% do assets.addCss('theme://assets/css/ie8.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}*/
/*             {% do assets.addCss('theme://assets/css/ie9.css') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }} */
/*         <style>*/
/*             {% if page.media.images|length > 0 %}*/
/*             body{*/
/*                 background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url("{{ page.media.images[page.header.background_image].url }}");*/
/*             }*/
/*             */
/*             @media screen and (max-width: 1280px) {*/
/*                 #banner {*/
/*                     background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url("{{ page.media.images[page.header.background_image].url }}");*/
/*                 }*/
/*             }*/
/*             */
/*             @media screen and (max-width: 1280px) {*/
/* */
/* 		#wrapper > header {*/
/*                     background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url("{{ page.media.images[page.header.background_image].url }}");*/
/* 		}*/
/* */
/* 	}*/
/*             */
/*             {% endif %}*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <!-- Page Wrapper -->*/
/*         <div id="page-wrapper">          */
/*             {% include 'partials/header.html.twig' %}         */
/*             {% include 'partials/navigation.html.twig' %}*/
/* */
/*             {% block content %}*/
/*             {% endblock %}*/
/* */
/*             {% include 'partials/footer.html.twig' %}*/
/*         </div>*/
/*         */
/*         <!-- Scripts -->*/
/*         {% do assets.addJs('theme://assets/js/skel.min.js') %}*/
/*         {% do assets.addJs('theme://assets/js/jquery.min.js') %}*/
/*         {% do assets.addJs('theme://assets/js/jquery.scrollex.min.js') %}*/
/*         {% do assets.addJs('theme://assets/js/util.js') %}*/
/*         {% do assets.addJs('theme://assets/js/main.js') %}*/
/*         {{ assets.js() }}*/
/* */
/*     </body>*/
/* </html>*/
/* */
