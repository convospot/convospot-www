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
        <div class=\"slide\">
            <div class=\"single-slide\">
                <div class=\"inner\">
                    ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                     <a href=\"https://www.facebook.com/socialnetworkincs/\" class=\"button sr-only\">Talk to a chatbot</a>
                </div>
            </div>
            <div class=\"single-slide\">
            </div>
            <div class=\"single-slide\">
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
        return array (  26 => 6,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="slash">*/
/*         <div class="slide">*/
/*             <div class="single-slide">*/
/*                 <div class="inner">*/
/*                     {{ content }}*/
/*                      <a href="https://www.facebook.com/socialnetworkincs/" class="button sr-only">Talk to a chatbot</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="single-slide">*/
/*             </div>*/
/*             <div class="single-slide">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
