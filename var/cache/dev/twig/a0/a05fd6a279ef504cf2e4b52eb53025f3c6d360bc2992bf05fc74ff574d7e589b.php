<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f3f5a005b5175715bdf5b50de6d4ab8d2aca71b83065e548af602627d01fdedb extends Twig_Template
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
        $__internal_d1aec08d909b66ce84eb106b55f5a3a0951f53639e36c97c7948e1a3f931e16f = $this->env->getExtension("native_profiler");
        $__internal_d1aec08d909b66ce84eb106b55f5a3a0951f53639e36c97c7948e1a3f931e16f->enter($__internal_d1aec08d909b66ce84eb106b55f5a3a0951f53639e36c97c7948e1a3f931e16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_d1aec08d909b66ce84eb106b55f5a3a0951f53639e36c97c7948e1a3f931e16f->leave($__internal_d1aec08d909b66ce84eb106b55f5a3a0951f53639e36c97c7948e1a3f931e16f_prof);

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
