<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fd89434d5288267dabb165a16b5e6a4b1f66a9a79fb92f44a431014320709fd7 extends Twig_Template
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
        $__internal_312bbcb797a193df0c4837ca95e312516f8fc73d9852892a5cae1d9ba63522e1 = $this->env->getExtension("native_profiler");
        $__internal_312bbcb797a193df0c4837ca95e312516f8fc73d9852892a5cae1d9ba63522e1->enter($__internal_312bbcb797a193df0c4837ca95e312516f8fc73d9852892a5cae1d9ba63522e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_312bbcb797a193df0c4837ca95e312516f8fc73d9852892a5cae1d9ba63522e1->leave($__internal_312bbcb797a193df0c4837ca95e312516f8fc73d9852892a5cae1d9ba63522e1_prof);

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
