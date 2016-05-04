<?php

/* default.html.twig */
class __TwigTemplate_2c50f99e9c4c949f17152030f6cb2ba6c26d49aefa5bf6d81b45e17853853747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"wrapper\">
    <header>
        <div class=\"inner\">
            <h2>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
            ";
        // line 8
        echo $this->env->getExtension('GravTwigExtension')->markdownFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array()));
        echo "
        </div>
    </header>

    <!-- Content -->
    <div class=\"wrapper\">
        <div class=\"inner\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            ";
        // line 16
        $this->loadTemplate("partials/features.html.twig", "default.html.twig", 16)->display(array_merge($context, array("features" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()))));
        // line 17
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  54 => 16,  50 => 15,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <section id="wrapper">*/
/*     <header>*/
/*         <div class="inner">*/
/*             <h2>{{ page.header.title }}</h2>*/
/*             {{ page.header.subtitle|markdown }}*/
/*         </div>*/
/*     </header>*/
/* */
/*     <!-- Content -->*/
/*     <div class="wrapper">*/
/*         <div class="inner">*/
/*             {{ page.content }}*/
/*             {% include 'partials/features.html.twig' with { 'features': page.header.features } %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
