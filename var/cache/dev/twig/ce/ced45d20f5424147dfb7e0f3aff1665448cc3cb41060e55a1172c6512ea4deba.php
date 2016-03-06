<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3b9d5a5cd2d6a7ab5da239074f493c2e4e0a668fa235346b40c0ffeb86d8d598 extends Twig_Template
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
        $__internal_2f4c61d6c43ec759abbca03bae267286f36394b4806b797dbdf0805a6587d745 = $this->env->getExtension("native_profiler");
        $__internal_2f4c61d6c43ec759abbca03bae267286f36394b4806b797dbdf0805a6587d745->enter($__internal_2f4c61d6c43ec759abbca03bae267286f36394b4806b797dbdf0805a6587d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2f4c61d6c43ec759abbca03bae267286f36394b4806b797dbdf0805a6587d745->leave($__internal_2f4c61d6c43ec759abbca03bae267286f36394b4806b797dbdf0805a6587d745_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
