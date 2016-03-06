<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c3111f7f6e31b8eb46399072de5191a7ae311cfb4a6caf8f4d7c77317f36cdb0 extends Twig_Template
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
        $__internal_ca5f0f871ec0556aec28e51ecab625dd8a847c88abdde251eec62855f9333569 = $this->env->getExtension("native_profiler");
        $__internal_ca5f0f871ec0556aec28e51ecab625dd8a847c88abdde251eec62855f9333569->enter($__internal_ca5f0f871ec0556aec28e51ecab625dd8a847c88abdde251eec62855f9333569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ca5f0f871ec0556aec28e51ecab625dd8a847c88abdde251eec62855f9333569->leave($__internal_ca5f0f871ec0556aec28e51ecab625dd8a847c88abdde251eec62855f9333569_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
