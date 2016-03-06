<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e1d30883426ae5101a104076ef9bd24cdef1e11059a3d2d103edb505ab93f840 extends Twig_Template
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
        $__internal_dc281820dde12637d871ec929490e5debc72201e123e984eb5cedd4f6f36c8e8 = $this->env->getExtension("native_profiler");
        $__internal_dc281820dde12637d871ec929490e5debc72201e123e984eb5cedd4f6f36c8e8->enter($__internal_dc281820dde12637d871ec929490e5debc72201e123e984eb5cedd4f6f36c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dc281820dde12637d871ec929490e5debc72201e123e984eb5cedd4f6f36c8e8->leave($__internal_dc281820dde12637d871ec929490e5debc72201e123e984eb5cedd4f6f36c8e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
