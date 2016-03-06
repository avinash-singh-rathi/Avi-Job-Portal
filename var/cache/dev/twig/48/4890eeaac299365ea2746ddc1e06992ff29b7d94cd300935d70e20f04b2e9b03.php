<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_adc20b157a9e6e28ce83b6369259613a1bc14e946d9ad402bda5c2187ddd1a41 extends Twig_Template
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
        $__internal_045d5851c5683f3c6a4504ffeb949d4736061bf5d90061f68cd2401150f19f5a = $this->env->getExtension("native_profiler");
        $__internal_045d5851c5683f3c6a4504ffeb949d4736061bf5d90061f68cd2401150f19f5a->enter($__internal_045d5851c5683f3c6a4504ffeb949d4736061bf5d90061f68cd2401150f19f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_045d5851c5683f3c6a4504ffeb949d4736061bf5d90061f68cd2401150f19f5a->leave($__internal_045d5851c5683f3c6a4504ffeb949d4736061bf5d90061f68cd2401150f19f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
