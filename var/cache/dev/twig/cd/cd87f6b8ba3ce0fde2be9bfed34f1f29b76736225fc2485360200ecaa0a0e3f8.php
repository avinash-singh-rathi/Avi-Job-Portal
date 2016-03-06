<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3683950ab8f6545279326aceff5f9fc0e730e497c0a4e1a049385998fff7cb63 extends Twig_Template
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
        $__internal_8b76b9ef90194201d1d554c016234ccc6cb2147c75a6cf6744cf3dd446214f9e = $this->env->getExtension("native_profiler");
        $__internal_8b76b9ef90194201d1d554c016234ccc6cb2147c75a6cf6744cf3dd446214f9e->enter($__internal_8b76b9ef90194201d1d554c016234ccc6cb2147c75a6cf6744cf3dd446214f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_8b76b9ef90194201d1d554c016234ccc6cb2147c75a6cf6744cf3dd446214f9e->leave($__internal_8b76b9ef90194201d1d554c016234ccc6cb2147c75a6cf6744cf3dd446214f9e_prof);

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
