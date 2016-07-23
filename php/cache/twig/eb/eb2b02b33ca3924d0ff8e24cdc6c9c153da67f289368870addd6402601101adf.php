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
        <div><div class=\"inner\">
        ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <div class=\"quick-signup\">
            <form class=\"group\" action=\"//convospot.us13.list-manage.com/subscribe/post?u=5d09472ed22fd10a4e82ebc98&amp;id=46c363364d\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate=\"\">
                    <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email left\" id=\"mce-EMAIL\" placeholder=\"email address\" required=\"\">
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <input type=\"submit\" value=\"DEMO\" name=\"demo\" id=\"mc-embedded-subscribe\" class=\"button right\"> </form>
        </div>
    </div></div>
        <div>your content</div>
        <div>your content</div>
      </div>
    </div>
</section>";
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
        return array (  25 => 5,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="slash">*/
/*       <div class="slide">*/
/*         <div><div class="inner">*/
/*         {{ content }}*/
/*         <div class="quick-signup">*/
/*             <form class="group" action="//convospot.us13.list-manage.com/subscribe/post?u=5d09472ed22fd10a4e82ebc98&amp;id=46c363364d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">*/
/*                     <input type="email" value="" name="EMAIL" class="email left" id="mce-EMAIL" placeholder="email address" required="">*/
/*                     <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->*/
/*                     <input type="submit" value="DEMO" name="demo" id="mc-embedded-subscribe" class="button right"> </form>*/
/*         </div>*/
/*     </div></div>*/
/*         <div>your content</div>*/
/*         <div>your content</div>*/
/*       </div>*/
/*     </div>*/
/* </section>*/
