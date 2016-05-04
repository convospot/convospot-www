<?php

/* partials/navigation.html.twig */
class __TwigTemplate_ede332be0014e796ec5fb5c0220a841106f4eb5ab6c4dbd8103e4b6536244577 extends Twig_Template
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
        echo "<nav id=\"menu\">
    <div class=\"inner\">
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "menu_name", array());
        echo "</h2>
        <ul class=\"links\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
        <a href=\"#\" class=\"close\">Close</a>
    </div>
</nav>";
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
        return array (  43 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <nav id="menu">*/
/*     <div class="inner">*/
/*         <h2>{{ site.header.menu_name }}</h2>*/
/*         <ul class="links">*/
/*             {% for page in pages.children %}*/
/*             <li><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <a href="#" class="close">Close</a>*/
/*     </div>*/
/* </nav>*/
