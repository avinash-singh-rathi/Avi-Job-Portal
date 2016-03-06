<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_58c844bc4ca84e26b705b93c2a8686d51df4bdccfd73dbdaeed3c6abb95171cd extends Twig_Template
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
        $__internal_162716d502f29d0ee085181158179f5eecffcea8bf2a4af657d4e7b4c19e4a20 = $this->env->getExtension("native_profiler");
        $__internal_162716d502f29d0ee085181158179f5eecffcea8bf2a4af657d4e7b4c19e4a20->enter($__internal_162716d502f29d0ee085181158179f5eecffcea8bf2a4af657d4e7b4c19e4a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_162716d502f29d0ee085181158179f5eecffcea8bf2a4af657d4e7b4c19e4a20->leave($__internal_162716d502f29d0ee085181158179f5eecffcea8bf2a4af657d4e7b4c19e4a20_prof);

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
