<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e23133df9a2d578e4451a021eb09d5d708eed34011e3f17b94b68799906d8756 extends Twig_Template
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
        $__internal_afaac403a10df4d29b16045ada5f5fc29f233423f18910912f4e8aaa2c30053e = $this->env->getExtension("native_profiler");
        $__internal_afaac403a10df4d29b16045ada5f5fc29f233423f18910912f4e8aaa2c30053e->enter($__internal_afaac403a10df4d29b16045ada5f5fc29f233423f18910912f4e8aaa2c30053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_afaac403a10df4d29b16045ada5f5fc29f233423f18910912f4e8aaa2c30053e->leave($__internal_afaac403a10df4d29b16045ada5f5fc29f233423f18910912f4e8aaa2c30053e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
