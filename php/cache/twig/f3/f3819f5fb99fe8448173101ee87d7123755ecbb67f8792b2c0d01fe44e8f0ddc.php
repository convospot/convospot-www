<?php

/* partials/header.html.twig */
class __TwigTemplate_2bcb4d93749de319fb1d63c6b2ff089ed954fb813b30b82a3fa76c0a30e22acc extends Twig_Template
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
        <a href=\"#menu\"><i class=\"zmdi zmdi-menu\"></i><span class=\"sr-only\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "menu_name", array());
        echo "</span></a>
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
/*         <a href="#menu"><i class="zmdi zmdi-menu"></i><span class="sr-only">{{ site.header.menu_name }}</span></a>*/
/*     </nav>*/
/* </header>*/