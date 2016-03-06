<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bca65fe0412547ed67ea884ae7900d400f405f6cf7ff309491f396ad15147d31 extends Twig_Template
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
        $__internal_405b7b6b9694ee58ad9a3f710a22e6062c65edaf6062b6bb2d22da22d4542bad = $this->env->getExtension("native_profiler");
        $__internal_405b7b6b9694ee58ad9a3f710a22e6062c65edaf6062b6bb2d22da22d4542bad->enter($__internal_405b7b6b9694ee58ad9a3f710a22e6062c65edaf6062b6bb2d22da22d4542bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_405b7b6b9694ee58ad9a3f710a22e6062c65edaf6062b6bb2d22da22d4542bad->leave($__internal_405b7b6b9694ee58ad9a3f710a22e6062c65edaf6062b6bb2d22da22d4542bad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
