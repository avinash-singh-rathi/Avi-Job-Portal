<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6641f72c401915170a1acc2f7bf556e4f21c07858e86527bdffc9771a334b63e extends Twig_Template
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
        $__internal_23cf5b924936f8c3e358fc8173bd56f68fb3193fb56c6df271eb5330b8b67bda = $this->env->getExtension("native_profiler");
        $__internal_23cf5b924936f8c3e358fc8173bd56f68fb3193fb56c6df271eb5330b8b67bda->enter($__internal_23cf5b924936f8c3e358fc8173bd56f68fb3193fb56c6df271eb5330b8b67bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_23cf5b924936f8c3e358fc8173bd56f68fb3193fb56c6df271eb5330b8b67bda->leave($__internal_23cf5b924936f8c3e358fc8173bd56f68fb3193fb56c6df271eb5330b8b67bda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
