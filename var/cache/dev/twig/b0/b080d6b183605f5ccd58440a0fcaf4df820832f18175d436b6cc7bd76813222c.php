<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_28000328f891407977e9918a8f3dd4c9e9c5b625aeb10f083d7cb6fccde4359a extends Twig_Template
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
        $__internal_81d08331521976a003934c3cf585e9870322c813ba60f5d0c5a6f02089084cba = $this->env->getExtension("native_profiler");
        $__internal_81d08331521976a003934c3cf585e9870322c813ba60f5d0c5a6f02089084cba->enter($__internal_81d08331521976a003934c3cf585e9870322c813ba60f5d0c5a6f02089084cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81d08331521976a003934c3cf585e9870322c813ba60f5d0c5a6f02089084cba->leave($__internal_81d08331521976a003934c3cf585e9870322c813ba60f5d0c5a6f02089084cba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
