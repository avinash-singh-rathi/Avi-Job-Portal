<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5d1c6a3ce46b35fc1b46b8e76e0b04dbc06939592f76f9987841aea7de98f515 extends Twig_Template
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
        $__internal_d76d5660ffba6d8e5615a5c853708bda9ec3965158332085800de84ea5cb2d57 = $this->env->getExtension("native_profiler");
        $__internal_d76d5660ffba6d8e5615a5c853708bda9ec3965158332085800de84ea5cb2d57->enter($__internal_d76d5660ffba6d8e5615a5c853708bda9ec3965158332085800de84ea5cb2d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d76d5660ffba6d8e5615a5c853708bda9ec3965158332085800de84ea5cb2d57->leave($__internal_d76d5660ffba6d8e5615a5c853708bda9ec3965158332085800de84ea5cb2d57_prof);

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
