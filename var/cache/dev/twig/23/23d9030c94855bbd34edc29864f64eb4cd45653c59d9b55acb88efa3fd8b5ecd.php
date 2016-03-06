<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_86ec584d55d67cc706f41ac63f11c0e457687901cdcba6906e1c0d43aa0f6c3f extends Twig_Template
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
        $__internal_b1c3d84890943df3bb4e0ef8aaeee0bf4db8ee00d00ce7900fc79752d1a296c5 = $this->env->getExtension("native_profiler");
        $__internal_b1c3d84890943df3bb4e0ef8aaeee0bf4db8ee00d00ce7900fc79752d1a296c5->enter($__internal_b1c3d84890943df3bb4e0ef8aaeee0bf4db8ee00d00ce7900fc79752d1a296c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b1c3d84890943df3bb4e0ef8aaeee0bf4db8ee00d00ce7900fc79752d1a296c5->leave($__internal_b1c3d84890943df3bb4e0ef8aaeee0bf4db8ee00d00ce7900fc79752d1a296c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
