<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_773cd4dde343671c23483516be3e53b9c017c51cd2a111460d5cde6906e77fe7 extends Twig_Template
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
        $__internal_ed4cd0798d4aa40a47dcc684c14652ab044c4a762cedfee94c78f1178ed2e246 = $this->env->getExtension("native_profiler");
        $__internal_ed4cd0798d4aa40a47dcc684c14652ab044c4a762cedfee94c78f1178ed2e246->enter($__internal_ed4cd0798d4aa40a47dcc684c14652ab044c4a762cedfee94c78f1178ed2e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ed4cd0798d4aa40a47dcc684c14652ab044c4a762cedfee94c78f1178ed2e246->leave($__internal_ed4cd0798d4aa40a47dcc684c14652ab044c4a762cedfee94c78f1178ed2e246_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
