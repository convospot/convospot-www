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
    <div class=\"slash\">
        <div class=\"inner\">
            <div class=\"pure-g\">
                <div class=\"pure-u-1-2\">
                  <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
                  <h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sub", array());
        echo "</h3>
                </div>
                <div class=\"pure-u-1-2\">
                    <img src=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array());
        echo "\" alt=\"demo\"></img>
                </div>
            </div>
        </div>
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
        return array (  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="slash">*/
/*         <div class="inner">*/
/*             <div class="pure-g">*/
/*                 <div class="pure-u-1-2">*/
/*                   <h2>{{page.header.title}}</h2>*/
/*                   <h3>{{page.header.sub}}</h3>*/
/*                 </div>*/
/*                 <div class="pure-u-1-2">*/
/*                     <img src="{{page.header.image}}" alt="demo"></img>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
