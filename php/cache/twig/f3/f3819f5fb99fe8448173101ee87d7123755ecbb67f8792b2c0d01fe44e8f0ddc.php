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
        echo "<header id=\"header\" class=\"navbar headroom\" role=\"banner\">
    <h1 class=\"logo\"><a href=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/"), "method"), "url", array());
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "logo_with_text", array());
        echo "\"></img><span class=\"sr-only\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</span></a></h1>
    <nav>
        <a href=\"#\" class=\"small\" ontap=\"showConvospot()\" onclick=\"showConvospot()\">Talk</a>
        <a href=\"http://app.convospot.io/login\" class=\"small \">Login</a>
        <a href=\"http://app.convospot.io/signup\" class=\"small rev\">Signup</a>
        <a href=\"#menu\"><i class=\"zmdi zmdi-menu\"></i><span class=\"sr-only\">";
        // line 7
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
        return array (  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <header id="header" class="navbar headroom" role="banner">*/
/*     <h1 class="logo"><a href="{{ page.find("/").url }}"><img src="{{ site.header.logo_with_text }}"></img><span class="sr-only">{{ site.header.title }}</span></a></h1>*/
/*     <nav>*/
/*         <a href="#" class="small" ontap="showConvospot()" onclick="showConvospot()">Talk</a>*/
/*         <a href="http://app.convospot.io/login" class="small ">Login</a>*/
/*         <a href="http://app.convospot.io/signup" class="small rev">Signup</a>*/
/*         <a href="#menu"><i class="zmdi zmdi-menu"></i><span class="sr-only">{{ site.header.menu_name }}</span></a>*/
/*     </nav>*/
/* </header>*/
