<?php

/* partials/navigation.html.twig */
class __TwigTemplate_ce4ff0a323e80400225c207b9bfc7838d2f9fddf89985103d88bc3ebcbb496bc extends Twig_Template
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
        echo "<nav class=\"navigation\">
    <section class=\"container\">
        <a class=\"navigation-title\" href=\"";
        // line 3
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
            <img class=\"img\" src=\"";
        // line 4
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.svg\" height=\"30\" alt=\"Milligram\" title=\"Milligram\">
            <h1 class=\"title\">convospot</h1>
        </a>
        <ul class=\"navigation-list float-right\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 10
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 11
                echo "                    <li class=\"navigation-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a class=\"navigation-link\" href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            <!--fixed external link-->
                <li class=\"navigation-item ";
        // line 15
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\"><a class=\"navigation-link\" href=\"\">Blog</a></li>
                <li class=\"navigation-item ";
        // line 16
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\"><a class=\"navigation-link\" href=\"\">Doc</a></li>
                <li class=\"navigation-item ";
        // line 17
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\"><a class=\"navigation-link\" href=\"\">API</a></li>
            <!--end: fixed external link-->
        </ul> 
    </section>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  67 => 16,  63 => 15,  60 => 14,  54 => 13,  44 => 11,  41 => 10,  38 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav class="navigation">*/
/*     <section class="container">*/
/*         <a class="navigation-title" href="{{ base_url_absolute }}">*/
/*             <img class="img" src="{{ theme_url }}/images/logo.svg" height="30" alt="Milligram" title="Milligram">*/
/*             <h1 class="title">convospot</h1>*/
/*         </a>*/
/*         <ul class="navigation-list float-right">*/
/*             {% for page in pages.children %}*/
/*                 {% if page.visible %}*/
/*                     {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*                     <li class="navigation-item {{ current_page }}"><a class="navigation-link" href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             <!--fixed external link-->*/
/*                 <li class="navigation-item {{ current_page }}"><a class="navigation-link" href="">Blog</a></li>*/
/*                 <li class="navigation-item {{ current_page }}"><a class="navigation-link" href="">Doc</a></li>*/
/*                 <li class="navigation-item {{ current_page }}"><a class="navigation-link" href="">API</a></li>*/
/*             <!--end: fixed external link-->*/
/*         </ul> */
/*     </section>*/
/* </nav>*/
/* */
