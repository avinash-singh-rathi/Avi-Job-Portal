<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2ce30cbe70b534bcb66da85df4dc675a8e4bb77ecc2b603bf78da6b1f26a962c extends Twig_Template
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
        $__internal_eda2b5081950d793acd939389c3e571c764c51e597bb4a0f6dfc1e2619b9349c = $this->env->getExtension("native_profiler");
        $__internal_eda2b5081950d793acd939389c3e571c764c51e597bb4a0f6dfc1e2619b9349c->enter($__internal_eda2b5081950d793acd939389c3e571c764c51e597bb4a0f6dfc1e2619b9349c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eda2b5081950d793acd939389c3e571c764c51e597bb4a0f6dfc1e2619b9349c->leave($__internal_eda2b5081950d793acd939389c3e571c764c51e597bb4a0f6dfc1e2619b9349c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
