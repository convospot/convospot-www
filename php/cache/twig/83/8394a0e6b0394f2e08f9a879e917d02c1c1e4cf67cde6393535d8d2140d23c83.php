<?php

/* partials/header.html.twig */
class __TwigTemplate_2f7b3e93591b032807b1390e1ed6ecc64ed54e4f66074a55fee8b32e72e4183c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"header\"";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home", array())) {
            echo " class=\"alt\"";
        }
        echo ">
    <h1><a href=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/"), "method"), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "logo", array());
        echo "</a></h1>
    <nav>
        <a href=\"#menu\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "menu_name", array());
        echo "</a>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  26 => 2,  19 => 1,);
    }
}
/* <header id="header"{% if page.home %} class="alt"{% endif %}>*/
/*     <h1><a href="{{ page.find("/").url }}">{{ site.header.logo }}</a></h1>*/
/*     <nav>*/
/*         <a href="#menu">{{ site.header.menu_name }}</a>*/
/*     </nav>*/
/* </header>*/
