<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_350790e2dcd06ac7a1c6b37167a4c843c02d23ddd2a0a258a409c502d26c49ef extends Twig_Template
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
        $__internal_0ee81695636f30289039f1af286ccbff3c39fe870f8c1706f5065e5f7a0e3a3f = $this->env->getExtension("native_profiler");
        $__internal_0ee81695636f30289039f1af286ccbff3c39fe870f8c1706f5065e5f7a0e3a3f->enter($__internal_0ee81695636f30289039f1af286ccbff3c39fe870f8c1706f5065e5f7a0e3a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0ee81695636f30289039f1af286ccbff3c39fe870f8c1706f5065e5f7a0e3a3f->leave($__internal_0ee81695636f30289039f1af286ccbff3c39fe870f8c1706f5065e5f7a0e3a3f_prof);

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
