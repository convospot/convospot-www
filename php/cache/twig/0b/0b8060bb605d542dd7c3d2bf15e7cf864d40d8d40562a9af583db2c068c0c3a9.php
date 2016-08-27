<?php

/* modular/6_generic.html.twig */
class __TwigTemplate_0666ee563f8c9d616dfd06fa55c854271aa48adf451c2309c813599a235b036b extends Twig_Template
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
        echo "<section id=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "id", array());
        echo "\" class=\"generic\">
    <div class=\"inner\">
        <div class=\"pure-g\">
            <div class=\"pure-u-1 pure-u-md-1-1\">
                ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/6_generic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  19 => 1,);
    }
}
/* <section id="{{page.header.id}}" class="generic">*/
/*     <div class="inner">*/
/*         <div class="pure-g">*/
/*             <div class="pure-u-1 pure-u-md-1-1">*/
/*                 {{page.content}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
