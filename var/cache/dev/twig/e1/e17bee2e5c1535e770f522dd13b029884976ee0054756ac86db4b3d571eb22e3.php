<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d93a53f257c51ec3cf9648d7540e435644fcebbe2be7eee2e1e11093c87bfd2f extends Twig_Template
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
        $__internal_baa19d944f8cfeee6f7b8d23f6ddae518e718c3f8eee98c0bc50a7ed2f72a2a0 = $this->env->getExtension("native_profiler");
        $__internal_baa19d944f8cfeee6f7b8d23f6ddae518e718c3f8eee98c0bc50a7ed2f72a2a0->enter($__internal_baa19d944f8cfeee6f7b8d23f6ddae518e718c3f8eee98c0bc50a7ed2f72a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_baa19d944f8cfeee6f7b8d23f6ddae518e718c3f8eee98c0bc50a7ed2f72a2a0->leave($__internal_baa19d944f8cfeee6f7b8d23f6ddae518e718c3f8eee98c0bc50a7ed2f72a2a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
