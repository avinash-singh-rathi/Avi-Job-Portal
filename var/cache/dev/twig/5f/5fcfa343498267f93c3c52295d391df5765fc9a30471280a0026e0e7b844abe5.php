<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_bb5d1f09a76a29c3eafc513ec8521018e66399b5e00c1219e20178ad5ac4c58d extends Twig_Template
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
        $__internal_4503354c400f34245c7c98129948cf17a3a259d018c59b4754d224e269b05057 = $this->env->getExtension("native_profiler");
        $__internal_4503354c400f34245c7c98129948cf17a3a259d018c59b4754d224e269b05057->enter($__internal_4503354c400f34245c7c98129948cf17a3a259d018c59b4754d224e269b05057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4503354c400f34245c7c98129948cf17a3a259d018c59b4754d224e269b05057->leave($__internal_4503354c400f34245c7c98129948cf17a3a259d018c59b4754d224e269b05057_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
