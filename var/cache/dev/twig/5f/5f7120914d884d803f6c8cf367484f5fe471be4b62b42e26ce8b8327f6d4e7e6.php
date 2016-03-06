<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_19d8b3e756f438aa5f700857e35e984709e604e51111271861e9930f40898e7e extends Twig_Template
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
        $__internal_1c4679b949748a4c73a7bed0f4863798a10b5cc75e96fa8a545fd67f1db804e4 = $this->env->getExtension("native_profiler");
        $__internal_1c4679b949748a4c73a7bed0f4863798a10b5cc75e96fa8a545fd67f1db804e4->enter($__internal_1c4679b949748a4c73a7bed0f4863798a10b5cc75e96fa8a545fd67f1db804e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_1c4679b949748a4c73a7bed0f4863798a10b5cc75e96fa8a545fd67f1db804e4->leave($__internal_1c4679b949748a4c73a7bed0f4863798a10b5cc75e96fa8a545fd67f1db804e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
