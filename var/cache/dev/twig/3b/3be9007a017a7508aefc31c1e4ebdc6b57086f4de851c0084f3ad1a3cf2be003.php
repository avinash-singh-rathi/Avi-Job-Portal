<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_920a6ec65acf0dce60028e46fbaa691ad51a20a31d78e371d9a707d155a3b025 extends Twig_Template
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
        $__internal_5d6f8f97f4499de5361d89f285765af83f6aef37b6f564c411a0d33384ab30d8 = $this->env->getExtension("native_profiler");
        $__internal_5d6f8f97f4499de5361d89f285765af83f6aef37b6f564c411a0d33384ab30d8->enter($__internal_5d6f8f97f4499de5361d89f285765af83f6aef37b6f564c411a0d33384ab30d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_5d6f8f97f4499de5361d89f285765af83f6aef37b6f564c411a0d33384ab30d8->leave($__internal_5d6f8f97f4499de5361d89f285765af83f6aef37b6f564c411a0d33384ab30d8_prof);

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
