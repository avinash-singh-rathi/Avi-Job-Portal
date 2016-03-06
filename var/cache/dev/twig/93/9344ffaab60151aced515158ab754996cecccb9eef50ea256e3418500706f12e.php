<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_76a8aa7127aed012da196edd477276613bf7fd785fd6c4eb5b6a9903eaafabce extends Twig_Template
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
        $__internal_aa4639a136c7afb80f7770781eadb88b21d349720f966bc90d562b93ce066f96 = $this->env->getExtension("native_profiler");
        $__internal_aa4639a136c7afb80f7770781eadb88b21d349720f966bc90d562b93ce066f96->enter($__internal_aa4639a136c7afb80f7770781eadb88b21d349720f966bc90d562b93ce066f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_aa4639a136c7afb80f7770781eadb88b21d349720f966bc90d562b93ce066f96->leave($__internal_aa4639a136c7afb80f7770781eadb88b21d349720f966bc90d562b93ce066f96_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
