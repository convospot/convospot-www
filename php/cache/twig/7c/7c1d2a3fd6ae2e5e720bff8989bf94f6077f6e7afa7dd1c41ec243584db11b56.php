<?php

/* partials/features.html.twig */
class __TwigTemplate_13d000681333cb34e1ac068f65e3fd3fc38e97847690b61d6ffb4b7212bacf17 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["features"]) ? $context["features"] : null)) > 0)) {
            // line 2
            echo "<section class=\"features\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["features"]) ? $context["features"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 4
                echo "        <article>
            <a href=\"#\" class=\"image\">";
                // line 5
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["feature"], "image", array()), array(), "array");
                echo "</a>
            <h3>";
                // line 6
                echo $this->getAttribute($context["feature"], "title", array());
                echo "</h3>
            ";
                // line 7
                echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($context["feature"], "body", array()));
                echo "
            <a href=\"";
                // line 8
                echo $this->getAttribute($context["feature"], "button_url", array());
                echo "\" class=\"special\">";
                echo $this->getAttribute($context["feature"], "button_caption", array());
                echo "</a>
        </article>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            
</section>
";
        }
        // line 12
        echo "    
";
    }

    public function getTemplateName()
    {
        return "partials/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  54 => 10,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if features|length > 0 %}*/
/* <section class="features">*/
/*     {% for feature in features %}*/
/*         <article>*/
/*             <a href="#" class="image">{{ page.media.images[feature.image] }}</a>*/
/*             <h3>{{ feature.title }}</h3>*/
/*             {{ feature.body|markdown }}*/
/*             <a href="{{ feature.button_url }}" class="special">{{ feature.button_caption }}</a>*/
/*         </article>*/
/*     {% endfor %}            */
/* </section>*/
/* {% endif %}    */
/* */
