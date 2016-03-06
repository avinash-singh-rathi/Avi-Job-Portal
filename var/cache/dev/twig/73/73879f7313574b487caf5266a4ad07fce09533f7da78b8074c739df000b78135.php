<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_2f60a11d389a66e1c89042eed03b6514f06dfeded6f5bf75271dba3753b646c1 extends Twig_Template
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
        $__internal_101cba65ac712a4efcd77912bf8e804bd5b08f5667f9db4e5429f59da45df299 = $this->env->getExtension("native_profiler");
        $__internal_101cba65ac712a4efcd77912bf8e804bd5b08f5667f9db4e5429f59da45df299->enter($__internal_101cba65ac712a4efcd77912bf8e804bd5b08f5667f9db4e5429f59da45df299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_101cba65ac712a4efcd77912bf8e804bd5b08f5667f9db4e5429f59da45df299->leave($__internal_101cba65ac712a4efcd77912bf8e804bd5b08f5667f9db4e5429f59da45df299_prof);

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
