<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_cf1eb1c5c855c9da99a86d813c91a71be32f7c936e084ac8a035fb7b3a49364e extends Twig_Template
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
        $__internal_595d1bf1caade315a90d2d6c8e6cb62608d548411b0d7d84c92921ab4f5c4ac7 = $this->env->getExtension("native_profiler");
        $__internal_595d1bf1caade315a90d2d6c8e6cb62608d548411b0d7d84c92921ab4f5c4ac7->enter($__internal_595d1bf1caade315a90d2d6c8e6cb62608d548411b0d7d84c92921ab4f5c4ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_595d1bf1caade315a90d2d6c8e6cb62608d548411b0d7d84c92921ab4f5c4ac7->leave($__internal_595d1bf1caade315a90d2d6c8e6cb62608d548411b0d7d84c92921ab4f5c4ac7_prof);

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
