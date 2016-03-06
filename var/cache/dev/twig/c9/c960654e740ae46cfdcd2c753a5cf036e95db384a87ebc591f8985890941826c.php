<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cae668bea2e8e13a0c1232790faeeb27cdb00717f9c9998dec6d053be84d9dc6 extends Twig_Template
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
        $__internal_28c793cf04b47564ccf820763d68651195651cfd3b616202f2aec6a309ca4443 = $this->env->getExtension("native_profiler");
        $__internal_28c793cf04b47564ccf820763d68651195651cfd3b616202f2aec6a309ca4443->enter($__internal_28c793cf04b47564ccf820763d68651195651cfd3b616202f2aec6a309ca4443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_28c793cf04b47564ccf820763d68651195651cfd3b616202f2aec6a309ca4443->leave($__internal_28c793cf04b47564ccf820763d68651195651cfd3b616202f2aec6a309ca4443_prof);

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
