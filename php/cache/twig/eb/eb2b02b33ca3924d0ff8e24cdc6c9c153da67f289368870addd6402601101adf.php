<?php

/* modular/1_banner.html.twig */
class __TwigTemplate_798b550a6cabf0c41cad1a3f00bca089a6f743776e42fc36629879e7448f568f extends Twig_Template
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
        echo "<section id=\"banner\">
    <div class=\"inner\">
        <div class=\"logo\"><span class=\"icon ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "icon", array());
        echo "\"></span></div>
        ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/1_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="inner">*/
/*         <div class="logo"><span class="icon {{ page.header.icon }}"></span></div>*/
/*         {{ content }}*/
/*     </div>*/
/* </section>*/
/* */
