<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b300af6bd83da7bb60b2e6cd23c250e5f6c84701060a35397ad05c8447697bd6 extends Twig_Template
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
        $__internal_20fcbb3c20f8e4980ed9293f03ee290b86cb2bace14ad45f78cf14c275e6433d = $this->env->getExtension("native_profiler");
        $__internal_20fcbb3c20f8e4980ed9293f03ee290b86cb2bace14ad45f78cf14c275e6433d->enter($__internal_20fcbb3c20f8e4980ed9293f03ee290b86cb2bace14ad45f78cf14c275e6433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_20fcbb3c20f8e4980ed9293f03ee290b86cb2bace14ad45f78cf14c275e6433d->leave($__internal_20fcbb3c20f8e4980ed9293f03ee290b86cb2bace14ad45f78cf14c275e6433d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
