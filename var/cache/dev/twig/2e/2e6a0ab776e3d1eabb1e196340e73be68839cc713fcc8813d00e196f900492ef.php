<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7b82d22287f70ebfd473006ff34d911f9f326a492e6367cbfc470e06b0af65a3 extends Twig_Template
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
        $__internal_6e7d77ba5a45dc3fcaaf986750016856b91efd9a4b04865204d14498beee0d0d = $this->env->getExtension("native_profiler");
        $__internal_6e7d77ba5a45dc3fcaaf986750016856b91efd9a4b04865204d14498beee0d0d->enter($__internal_6e7d77ba5a45dc3fcaaf986750016856b91efd9a4b04865204d14498beee0d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6e7d77ba5a45dc3fcaaf986750016856b91efd9a4b04865204d14498beee0d0d->leave($__internal_6e7d77ba5a45dc3fcaaf986750016856b91efd9a4b04865204d14498beee0d0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
