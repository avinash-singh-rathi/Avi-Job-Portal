<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_76fadbd8e27c4a3da2e6d102fd9307f6968cc3c252832e46e36a0ada044c0410 extends Twig_Template
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
        $__internal_86b0693080f0c9ec92975d213a76d478dbaee59ac65538b8b8f20dd9d28f035a = $this->env->getExtension("native_profiler");
        $__internal_86b0693080f0c9ec92975d213a76d478dbaee59ac65538b8b8f20dd9d28f035a->enter($__internal_86b0693080f0c9ec92975d213a76d478dbaee59ac65538b8b8f20dd9d28f035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_86b0693080f0c9ec92975d213a76d478dbaee59ac65538b8b8f20dd9d28f035a->leave($__internal_86b0693080f0c9ec92975d213a76d478dbaee59ac65538b8b8f20dd9d28f035a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
