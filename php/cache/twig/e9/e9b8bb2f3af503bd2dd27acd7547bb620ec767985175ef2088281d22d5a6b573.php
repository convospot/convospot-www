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
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "-";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "keywords", array());
        echo "\">
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
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo " 

        <!-- custom styles -->
        <link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css\"/>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">          
            ";
        // line 56
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 56)->display($context);
        echo "         
            ";
        // line 57
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "        </div>
        
        <!-- Scripts -->
        ";
        // line 66
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 67
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.min.js"), "method");
        // line 68
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.scrollex.min.js"), "method");
        // line 69
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 70
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 71
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
        <!-- convospot widget -->
        <script src=\"http://widget.convospots.com/convospot.js\"  aid=\"100007\" token=\"LqM6D\" async async></script>
        <script>

 (function(\$){
   \$('.slide').slick({dots: true,
  infinite: false,speed: 2000, slidesToScroll: 1, autoplay: true,  //add autoplay: true in prod
  autoplaySpeed: 3000});
 })(jQuery); 


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79377505-1', 'auto');
  ga('send', 'pageview');

         </script>

    </body>
</html>
";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 34
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 35
            echo "        ";
        }
        // line 36
        echo "        
        ";
        // line 37
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css", 1 => 103), "method");
        // line 38
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 39
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 40
            echo "        ";
        }
        // line 41
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            // line 42
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 43
            echo "        ";
        }
        // line 44
        echo "    ";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
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
        return array (  190 => 60,  187 => 59,  183 => 44,  180 => 43,  177 => 42,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  163 => 37,  160 => 36,  157 => 35,  154 => 34,  151 => 33,  148 => 32,  117 => 71,  114 => 70,  111 => 69,  108 => 68,  105 => 67,  103 => 66,  98 => 63,  96 => 62,  93 => 61,  91 => 59,  88 => 58,  86 => 57,  82 => 56,  67 => 45,  65 => 32,  41 => 11,  37 => 10,  31 => 9,  21 => 1,);
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
/*         <title>{{page.header.title}}-{{site.title}}</title>*/
/*         <meta name="description" content="{{site.metadata.description}}">*/
/*         <meta name="keywords" content="{{site.metadata.keywords}}">*/
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
/*         <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">*/
/*         <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>*/
/*         <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>*/
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
/*         <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>*/
/*         <!-- convospot widget -->*/
/*         <script src="http://widget.convospots.com/convospot.js"  aid="100007" token="LqM6D" async async></script>*/
/*         <script>*/
/* */
/*  (function($){*/
/*    $('.slide').slick({dots: true,*/
/*   infinite: false,speed: 2000, slidesToScroll: 1, autoplay: true,  //add autoplay: true in prod*/
/*   autoplaySpeed: 3000});*/
/*  })(jQuery); */
/* */
/* */
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');*/
/* */
/*   ga('create', 'UA-79377505-1', 'auto');*/
/*   ga('send', 'pageview');*/
/* */
/*          </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */