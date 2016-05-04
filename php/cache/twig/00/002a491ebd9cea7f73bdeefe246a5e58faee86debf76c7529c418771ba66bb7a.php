<?php

/* partials/footer.html.twig */
class __TwigTemplate_efbb258e611a72975cf37d75921f294c245bb7458b080c64c6103cce1e9a70ad extends Twig_Template
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
        echo "<section id=\"footer\">
    <div class=\"inner\">
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "title", array());
        echo "</h2>
        ";
        // line 4
        echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "content", array()));
        echo "   
        ";
        // line 5
        echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "simple_form", array())));
        echo "
        <ul class=\"contact\">
            <li class=\"fa-home\">
                ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "company", array());
        echo "   
            </li>
            <li class=\"fa-phone\">";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "phone", array());
        echo " </li>
            <li class=\"fa-envelope\"><a href=\"#\">";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "envelope", array());
        echo " </a></li>
            <li class=\"fa-twitter\"><a href=\"#\">";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "twitter", array());
        echo " </a></li>
            <li class=\"fa-facebook\"><a href=\"#\">";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "facebook", array());
        echo " </a></li>
            <li class=\"fa-instagram\"><a href=\"#\">";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "instagram", array());
        echo "</a></li>
        </ul>
        <ul class=\"copyright\">
            <li>";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "copyright", array());
        echo "</li>
            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  37 => 8,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section id="footer">*/
/*     <div class="inner">*/
/*         <h2>{{ site.footer.title }}</h2>*/
/*         {{ site.footer.content|markdown }}   */
/*         {{ simple_form(site.footer.simple_form) }}*/
/*         <ul class="contact">*/
/*             <li class="fa-home">*/
/*                 {{ site.footer.company }}   */
/*             </li>*/
/*             <li class="fa-phone">{{ site.footer.phone }} </li>*/
/*             <li class="fa-envelope"><a href="#">{{ site.footer.envelope }} </a></li>*/
/*             <li class="fa-twitter"><a href="#">{{ site.footer.twitter }} </a></li>*/
/*             <li class="fa-facebook"><a href="#">{{ site.footer.facebook }} </a></li>*/
/*             <li class="fa-instagram"><a href="#">{{ site.footer.instagram }}</a></li>*/
/*         </ul>*/
/*         <ul class="copyright">*/
/*             <li>{{ site.footer.copyright }}</li>*/
/*             <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </section>*/
