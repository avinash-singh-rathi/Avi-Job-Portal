<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b7ef77fcf5d2d4b2568ff8dcf8b8629d5098a7f84c54adb9fa76514c2dc7185b extends Twig_Template
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
        $__internal_e95ad9c87df3cabcde9c9bf1e0e89453a57f0589d7032c714b358db05bfb84ed = $this->env->getExtension("native_profiler");
        $__internal_e95ad9c87df3cabcde9c9bf1e0e89453a57f0589d7032c714b358db05bfb84ed->enter($__internal_e95ad9c87df3cabcde9c9bf1e0e89453a57f0589d7032c714b358db05bfb84ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e95ad9c87df3cabcde9c9bf1e0e89453a57f0589d7032c714b358db05bfb84ed->leave($__internal_e95ad9c87df3cabcde9c9bf1e0e89453a57f0589d7032c714b358db05bfb84ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
