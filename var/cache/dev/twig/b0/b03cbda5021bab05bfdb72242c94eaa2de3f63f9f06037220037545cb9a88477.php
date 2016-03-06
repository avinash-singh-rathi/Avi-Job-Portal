<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_97b1f0f50bb6ad8473ebbea2a94b3c750689b42dbaa282421ac9ea8372723eef extends Twig_Template
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
        $__internal_18796410e85f8e1f4104a57720164505112cbc4eb6d537e04d4ab0ffe1646652 = $this->env->getExtension("native_profiler");
        $__internal_18796410e85f8e1f4104a57720164505112cbc4eb6d537e04d4ab0ffe1646652->enter($__internal_18796410e85f8e1f4104a57720164505112cbc4eb6d537e04d4ab0ffe1646652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_18796410e85f8e1f4104a57720164505112cbc4eb6d537e04d4ab0ffe1646652->leave($__internal_18796410e85f8e1f4104a57720164505112cbc4eb6d537e04d4ab0ffe1646652_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
