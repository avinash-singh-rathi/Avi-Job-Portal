<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_0ab0a38bef0a0d773eef40dbf1449d4883200092ae41c5510dea6cd5e0d89d01 extends Twig_Template
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
        $__internal_9ec48b493b7e3f7192e003f01bf8b64236f8c5ffe14e212caa0c8df0a43ed123 = $this->env->getExtension("native_profiler");
        $__internal_9ec48b493b7e3f7192e003f01bf8b64236f8c5ffe14e212caa0c8df0a43ed123->enter($__internal_9ec48b493b7e3f7192e003f01bf8b64236f8c5ffe14e212caa0c8df0a43ed123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9ec48b493b7e3f7192e003f01bf8b64236f8c5ffe14e212caa0c8df0a43ed123->leave($__internal_9ec48b493b7e3f7192e003f01bf8b64236f8c5ffe14e212caa0c8df0a43ed123_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
