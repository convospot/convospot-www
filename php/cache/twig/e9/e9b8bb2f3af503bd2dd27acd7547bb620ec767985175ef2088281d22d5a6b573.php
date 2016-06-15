<?php

/* partials/base.html.twig */
class __TwigTemplate_b29f48dc7d55eba8b4f2f4b727ecfdd3fab0e13437f073f20ba1deb93485d245 extends Twig_Template
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
        <title>";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"user/themes/convospot/assets/favicon/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"user/themes/convospot/assets/favicon/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"user/themes/convospot/assets/favicon/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"user/themes/convospot/assets/favicon/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"user/themes/convospot/assets/favicon/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"user/themes/convospot/assets/favicon/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"user/themes/convospot/assets/favicon/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"user/themes/convospot/assets/favicon/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"user/themes/convospot/assets/favicon/apple-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"user/themes/convospot/assets/favicon/android-icon-192x192.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"user/themes/convospot/assets/favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"user/themes/convospot/assets/favicon/favicon-96x96.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"user/themes/convospot/assets/favicon/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"user/themes/convospot/assets/favicon/manifest.json\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"user/themes/convospot/assets/favicon/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo " 

        <!-- custom styles -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css\">
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">          
            ";
        // line 51
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 51)->display($context);
        echo "         
            ";
        // line 52
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "        </div>
        
        <!-- Scripts -->
        ";
        // line 61
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 62
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.min.js"), "method");
        // line 63
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.scrollex.min.js"), "method");
        // line 64
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 65
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 66
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        <!-- convospot widget -->
        <script src=\"http://widget-convospot-io.herokuapp.com/convospot.js\" aid=\"
100000\" token=\"GJzol\" async></script>

    </body>
</html>
";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 32
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        
        ";
        // line 35
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css", 1 => 103), "method");
        // line 36
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 37
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 38
            echo "        ";
        }
        // line 39
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            // line 40
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 41
            echo "        ";
        }
        // line 42
        echo "    ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
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
        return array (  159 => 55,  156 => 54,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  129 => 34,  126 => 33,  123 => 32,  120 => 31,  117 => 30,  104 => 66,  101 => 65,  98 => 64,  95 => 63,  92 => 62,  90 => 61,  85 => 58,  83 => 57,  80 => 56,  78 => 54,  75 => 53,  73 => 52,  69 => 51,  57 => 43,  55 => 30,  31 => 9,  21 => 1,);
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
/*         <title>{{page.title}}</title>*/
/*         <meta charset="utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <link rel="apple-touch-icon" sizes="57x57" href="user/themes/convospot/assets/favicon/apple-icon-57x57.png">*/
/*         <link rel="apple-touch-icon" sizes="60x60" href="user/themes/convospot/assets/favicon/apple-icon-60x60.png">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="user/themes/convospot/assets/favicon/apple-icon-72x72.png">*/
/*         <link rel="apple-touch-icon" sizes="76x76" href="user/themes/convospot/assets/favicon/apple-icon-76x76.png">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="user/themes/convospot/assets/favicon/apple-icon-114x114.png">*/
/*         <link rel="apple-touch-icon" sizes="120x120" href="user/themes/convospot/assets/favicon/apple-icon-120x120.png">*/
/*         <link rel="apple-touch-icon" sizes="144x144" href="user/themes/convospot/assets/favicon/apple-icon-144x144.png">*/
/*         <link rel="apple-touch-icon" sizes="152x152" href="user/themes/convospot/assets/favicon/apple-icon-152x152.png">*/
/*         <link rel="apple-touch-icon" sizes="180x180" href="user/themes/convospot/assets/favicon/apple-icon-180x180.png">*/
/*         <link rel="icon" type="image/png" sizes="192x192"  href="user/themes/convospot/assets/favicon/android-icon-192x192.png">*/
/*         <link rel="icon" type="image/png" sizes="32x32" href="user/themes/convospot/assets/favicon/favicon-32x32.png">*/
/*         <link rel="icon" type="image/png" sizes="96x96" href="user/themes/convospot/assets/favicon/favicon-96x96.png">*/
/*         <link rel="icon" type="image/png" sizes="16x16" href="user/themes/convospot/assets/favicon/favicon-16x16.png">*/
/*         <link rel="manifest" href="user/themes/convospot/assets/favicon/manifest.json">*/
/*         <meta name="msapplication-TileColor" content="#ffffff">*/
/*         <meta name="msapplication-TileImage" content="user/themes/convospot/assets/favicon/ms-icon-144x144.png">*/
/*         <meta name="theme-color" content="#ffffff">*/
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
/* */
/*         <!-- custom styles -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">*/
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
/*         <!-- convospot widget -->*/
/*         <script src="http://widget-convospot-io.herokuapp.com/convospot.js" aid="*/
/* 100000" token="GJzol" async></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
