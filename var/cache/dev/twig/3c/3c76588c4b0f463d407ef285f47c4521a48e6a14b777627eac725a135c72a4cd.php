<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_53b4ac5b385f38dbcb06e9a52efa82297e59c2de889c375b502f57c12fe5b6dc extends Twig_Template
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
        $__internal_6ddbdc1662ef8c4a3eac524805b82d9db67b89e1883adc34faa6d64c024b3a7d = $this->env->getExtension("native_profiler");
        $__internal_6ddbdc1662ef8c4a3eac524805b82d9db67b89e1883adc34faa6d64c024b3a7d->enter($__internal_6ddbdc1662ef8c4a3eac524805b82d9db67b89e1883adc34faa6d64c024b3a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ddbdc1662ef8c4a3eac524805b82d9db67b89e1883adc34faa6d64c024b3a7d->leave($__internal_6ddbdc1662ef8c4a3eac524805b82d9db67b89e1883adc34faa6d64c024b3a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
