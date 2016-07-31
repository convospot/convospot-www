<?php

/* modular/2_wrapper.html.twig */
class __TwigTemplate_5a74533668428a0415a331efdb44237a669b0534e3e04e93beb2b7696ca06f33 extends Twig_Template
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
            echo "    ";
            if (($this->getAttribute($context["section"], "type", array()) == "section1")) {
                // line 5
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
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["section"], "image", array()), array(), "array");
                echo "
            </span>
            </a>
            <div class=\"content\">
                <h2>";
                // line 13
                echo $this->getAttribute($context["section"], "title", array());
                echo "</h2>
                ";
                // line 14
                echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($context["section"], "body", array()));
                echo "
                <a href=\"";
                // line 15
                echo $this->getAttribute($context["section"], "button_url", array());
                echo "\" class=\"special\">";
                echo $this->getAttribute($context["section"], "button_caption", array());
                echo "</a>
            </div>
        </div>
    </section> 
    ";
            } elseif (($this->getAttribute(            // line 19
$context["section"], "type", array()) == "section2")) {
                // line 20
                echo "    <section id=\"four\" class=\"wrapper ";
                echo $this->getAttribute($context["section"], "style", array());
                echo " ";
                echo twig_cycle(array(0 => "alt", 1 => ""), $this->getAttribute($context["loop"], "index", array()));
                echo "\">
        <div class=\"inner\">
            ";
                // line 22
                echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($context["section"], "body", array()));
                echo "
            ";
                // line 23
                $this->loadTemplate("partials/features.html.twig", "modular/2_wrapper.html.twig", 23)->display(array_merge($context, array("features" => $this->getAttribute($context["section"], "features", array()))));
                // line 24
                echo "            <ul class=\"actions\">
                <li><a href=\"";
                // line 25
                echo $this->getAttribute($context["section"], "button_url", array());
                echo "\" class=\"button sr-only\">";
                echo $this->getAttribute($context["section"], "button_caption", array());
                echo "</a></li>
            </ul>
        </div>
    </section>
    ";
            }
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
        // line 31
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/2_wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  98 => 25,  95 => 24,  93 => 23,  89 => 22,  81 => 20,  79 => 19,  70 => 15,  66 => 14,  62 => 13,  55 => 9,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Wrapper -->*/
/* <section id="wrapper">*/
/* {% for name, section in page.header.sections %}*/
/*     {% if (section.type == 'section1') %}*/
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
/*     {% elseif (section.type == 'section2') %}*/
/*     <section id="four" class="wrapper {{ section.style }} {{ cycle(['alt',''],loop.index) }}">*/
/*         <div class="inner">*/
/*             {{ section.body|markdown }}*/
/*             {% include 'partials/features.html.twig' with { 'features': section.features } %}*/
/*             <ul class="actions">*/
/*                 <li><a href="{{ section.button_url }}" class="button sr-only">{{ section.button_caption }}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </section>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* </section>*/
/* */
