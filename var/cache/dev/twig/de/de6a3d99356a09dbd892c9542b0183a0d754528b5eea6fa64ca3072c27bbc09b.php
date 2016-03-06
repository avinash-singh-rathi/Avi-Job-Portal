<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ab691530449a7887bb0a7b8d67fb7332a77e4bb7424b5bab15d626fcbd08959b extends Twig_Template
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
        $__internal_6803a74043fa19805c72e3175de9493a950806f800deace5778c27c656735045 = $this->env->getExtension("native_profiler");
        $__internal_6803a74043fa19805c72e3175de9493a950806f800deace5778c27c656735045->enter($__internal_6803a74043fa19805c72e3175de9493a950806f800deace5778c27c656735045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6803a74043fa19805c72e3175de9493a950806f800deace5778c27c656735045->leave($__internal_6803a74043fa19805c72e3175de9493a950806f800deace5778c27c656735045_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
