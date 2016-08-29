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
    <div class=\"logo\"><a href=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/"), "method"), "url", array());
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "logo_with_text", array());
        echo "\"></img><span class=\"sr-only\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</span></a></div>
    <nav>
        <ul class=\"nav-collapse\">
            <li>
                <a href=\"#\" class=\"small has-border\" ontap=\"showConvospot()\" onclick=\"showConvospot()\">Talk to bot</a>
            </li>
            <li>
                <a href=\"/\" class=\"small\">Get started</a>
            </li>
            <li>
                <a href=\"http://doc.convospot.io\" class=\"small\">Doc</a>
            </li>
            <li>
                <a href=\"/team\" class=\"small\">Team</a>
            </li>
            <li>
                <a href=\"http://blog.convospot.io\" class=\"small\">Blog</a>
            </li>
            <li class=\"end\">
                <a href=\"http://app.convospot.io/login\" class=\"small \">Login</a>
                <span class=\"sep-txt\">or</span>
                <a href=\"http://app.convospot.io/signup\" class=\"small rev\">Signup</a>
            </li>
            <!-- <a href=\"#menu\"><i class=\"zmdi zmdi-menu\"></i><span class=\"sr-only\">";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "menu_name", array());
        echo "</span></a> -->
        </ul>
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
        return array (  52 => 25,  22 => 2,  19 => 1,);
    }
}
/* <header id="header" class="navbar headroom" role="banner">*/
/*     <div class="logo"><a href="{{ page.find("/").url }}"><img src="{{ site.header.logo_with_text }}"></img><span class="sr-only">{{ site.header.title }}</span></a></div>*/
/*     <nav>*/
/*         <ul class="nav-collapse">*/
/*             <li>*/
/*                 <a href="#" class="small has-border" ontap="showConvospot()" onclick="showConvospot()">Talk to bot</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="/" class="small">Get started</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://doc.convospot.io" class="small">Doc</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="/team" class="small">Team</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="http://blog.convospot.io" class="small">Blog</a>*/
/*             </li>*/
/*             <li class="end">*/
/*                 <a href="http://app.convospot.io/login" class="small ">Login</a>*/
/*                 <span class="sep-txt">or</span>*/
/*                 <a href="http://app.convospot.io/signup" class="small rev">Signup</a>*/
/*             </li>*/
/*             <!-- <a href="#menu"><i class="zmdi zmdi-menu"></i><span class="sr-only">{{ site.header.menu_name }}</span></a> -->*/
/*         </ul>*/
/*     </nav>*/
/* </header>*/
