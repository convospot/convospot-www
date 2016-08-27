<?php

/* modular/3_wrapper.html.twig */
class __TwigTemplate_bb08a57036660255e5ddeddfae0b343a76dd538ba99578c11d3df3e2d05f1eb5 extends Twig_Template
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
        echo "<!-- Wrapper -->
<section id=\"wrapper\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sections", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["section"]) {
            // line 4
            echo "    <section id=\"";
            echo $context["name"];
            echo "\" class=\"wrapper spotlight ";
            echo $this->getAttribute($context["section"], "style", array());
            echo " ";
            echo twig_cycle(array(0 => "alt", 1 => ""), $this->getAttribute($context["loop"], "index", array()));
            echo "\">
        <div class=\"inner\">
            <a href=\"#\" class=\"image\">
            <span class=\"image-cover\">
            ";
            // line 8
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["section"], "image", array()), array(), "array");
            echo "
            </span>
            </a>
            <div class=\"content\">
                <h2>";
            // line 12
            echo $this->getAttribute($context["section"], "title", array());
            echo "</h2>
                ";
            // line 13
            echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($context["section"], "body", array()));
            echo "
                <a href=\"";
            // line 14
            echo $this->getAttribute($context["section"], "button_url", array());
            echo "\" class=\"special\">";
            echo $this->getAttribute($context["section"], "button_caption", array());
            echo "</a>
            </div>
        </div>
    </section> 
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/3_wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  40 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Wrapper -->*/
/* <section id="wrapper">*/
/* {% for name, section in page.header.sections %}*/
/*     <section id="{{ name }}" class="wrapper spotlight {{ section.style }} {{ cycle(['alt',''],loop.index) }}">*/
/*         <div class="inner">*/
/*             <a href="#" class="image">*/
/*             <span class="image-cover">*/
/*             {{ page.media.images[section.image] }}*/
/*             </span>*/
/*             </a>*/
/*             <div class="content">*/
/*                 <h2>{{ section.title }}</h2>*/
/*                 {{ section.body|markdown }}*/
/*                 <a href="{{ section.button_url }}" class="special">{{ section.button_caption }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </section> */
/* {% endfor %}*/
/* </section>*/
/* */
