<?php

/* partials/base.html.twig */
class __TwigTemplate_b29f48dc7d55eba8b4f2f4b727ecfdd3fab0e13437f073f20ba1deb93485d245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>

<body>
    <main class=\"wrapper\">
        ";
        // line 39
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "
        <div class=\"container\">
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "        </div>

        <footer class=\"footer\">
            <section class=\"container\">
                <p>2016 Reflen Inc. All rights reserved.</p>
            </section>
        </footer>
    </main>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 19
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/milligram.min.css", 1 => 101), "method");
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/style.css", 1 => 101), "method");
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/custom.css", 1 => 101), "method");
        // line 25
        echo "
            ";
        // line 26
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css", 1 => 100), "method");
        // line 27
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
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
        return array (  151 => 42,  144 => 31,  141 => 30,  134 => 27,  132 => 26,  129 => 25,  126 => 24,  123 => 23,  120 => 22,  117 => 21,  112 => 33,  110 => 30,  107 => 29,  105 => 21,  96 => 19,  91 => 17,  88 => 16,  82 => 14,  79 => 13,  73 => 11,  67 => 9,  65 => 8,  60 => 5,  57 => 4,  44 => 43,  42 => 42,  38 => 40,  36 => 39,  30 => 35,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*             <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*             <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*             <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         */
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.add('theme://css/milligram.min.css',101) %}*/
/*             {% do assets.add('theme://css/style.css',101) %}*/
/*             {% do assets.add('theme://css/custom.css',101) %}*/
/* */
/*             {% do assets.add('https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css',100) %}*/
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*     {% endblock head %}*/
/* </head>*/
/* */
/* <body>*/
/*     <main class="wrapper">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/* */
/*         <div class="container">*/
/*             {% block content %}{% endblock %}*/
/*         </div>*/
/* */
/*         <footer class="footer">*/
/*             <section class="container">*/
/*                 <p>2016 Reflen Inc. All rights reserved.</p>*/
/*             </section>*/
/*         </footer>*/
/*     </main>*/
/* </body>*/
/* </html>*/
