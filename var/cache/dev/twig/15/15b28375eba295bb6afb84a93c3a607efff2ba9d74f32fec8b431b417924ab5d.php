<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2324519c5f191e2f03327a0f597a8f3093d1588c0c3df1701ab5d11d3e8eead9 extends Twig_Template
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
        $__internal_8a1e3ecd65f0ddbc93227f498be5c82f5ca2dd9d10b663579dbdb94852300af0 = $this->env->getExtension("native_profiler");
        $__internal_8a1e3ecd65f0ddbc93227f498be5c82f5ca2dd9d10b663579dbdb94852300af0->enter($__internal_8a1e3ecd65f0ddbc93227f498be5c82f5ca2dd9d10b663579dbdb94852300af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a1e3ecd65f0ddbc93227f498be5c82f5ca2dd9d10b663579dbdb94852300af0->leave($__internal_8a1e3ecd65f0ddbc93227f498be5c82f5ca2dd9d10b663579dbdb94852300af0_prof);

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
