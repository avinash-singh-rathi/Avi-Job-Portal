<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c4cfd3bf5f2a707c759ee622375efa8d70097918d93f62a9116422f375361b1d extends Twig_Template
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
        $__internal_c5eea651991e0a21180a450dda4e646a20b3850a9948ca374c03d570282eaf9e = $this->env->getExtension("native_profiler");
        $__internal_c5eea651991e0a21180a450dda4e646a20b3850a9948ca374c03d570282eaf9e->enter($__internal_c5eea651991e0a21180a450dda4e646a20b3850a9948ca374c03d570282eaf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c5eea651991e0a21180a450dda4e646a20b3850a9948ca374c03d570282eaf9e->leave($__internal_c5eea651991e0a21180a450dda4e646a20b3850a9948ca374c03d570282eaf9e_prof);

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
