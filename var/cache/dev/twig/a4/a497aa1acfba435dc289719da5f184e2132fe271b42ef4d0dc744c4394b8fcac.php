<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6bff62cd4d0448744b3f3ce6db9484edb98ebf13ed0255b337461a862112b37a extends Twig_Template
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
        $__internal_501dc417ff0a063ace1941e8464a71c87a5e372c77a683a1c8c76d815014769f = $this->env->getExtension("native_profiler");
        $__internal_501dc417ff0a063ace1941e8464a71c87a5e372c77a683a1c8c76d815014769f->enter($__internal_501dc417ff0a063ace1941e8464a71c87a5e372c77a683a1c8c76d815014769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_501dc417ff0a063ace1941e8464a71c87a5e372c77a683a1c8c76d815014769f->leave($__internal_501dc417ff0a063ace1941e8464a71c87a5e372c77a683a1c8c76d815014769f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
