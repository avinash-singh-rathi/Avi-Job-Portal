<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fece3089995ea1e386aca4afeadd8b3c07c1dbad35f68e2134568d7221464698 extends Twig_Template
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
        $__internal_a13de6bf79d185dbdf58709953aaa751682cbbba58b8a52b1aed148c6bd75a2a = $this->env->getExtension("native_profiler");
        $__internal_a13de6bf79d185dbdf58709953aaa751682cbbba58b8a52b1aed148c6bd75a2a->enter($__internal_a13de6bf79d185dbdf58709953aaa751682cbbba58b8a52b1aed148c6bd75a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a13de6bf79d185dbdf58709953aaa751682cbbba58b8a52b1aed148c6bd75a2a->leave($__internal_a13de6bf79d185dbdf58709953aaa751682cbbba58b8a52b1aed148c6bd75a2a_prof);

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
