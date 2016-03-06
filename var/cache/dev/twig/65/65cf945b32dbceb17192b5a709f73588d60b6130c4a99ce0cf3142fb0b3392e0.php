<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e50dcddfd29d0feafdb313b20e8a95634ac4cd8b7ea0e5680ace3413a63bba2 extends Twig_Template
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
        $__internal_4e74c560ec948c182f00c0af80154af21a3590e4fb49c7008b9f71491071c2bd = $this->env->getExtension("native_profiler");
        $__internal_4e74c560ec948c182f00c0af80154af21a3590e4fb49c7008b9f71491071c2bd->enter($__internal_4e74c560ec948c182f00c0af80154af21a3590e4fb49c7008b9f71491071c2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4e74c560ec948c182f00c0af80154af21a3590e4fb49c7008b9f71491071c2bd->leave($__internal_4e74c560ec948c182f00c0af80154af21a3590e4fb49c7008b9f71491071c2bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
