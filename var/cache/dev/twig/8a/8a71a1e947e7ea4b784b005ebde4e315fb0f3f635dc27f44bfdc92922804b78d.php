<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7143ddbcb9ca78cd8d7b24a3a48a54f1b97093e5d121aa42e8b1759e31a31265 extends Twig_Template
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
        $__internal_f7f990b5eda20c78af8db6e8744ee5bacd7781be6aa112f584e707f3d67ebcd6 = $this->env->getExtension("native_profiler");
        $__internal_f7f990b5eda20c78af8db6e8744ee5bacd7781be6aa112f584e707f3d67ebcd6->enter($__internal_f7f990b5eda20c78af8db6e8744ee5bacd7781be6aa112f584e707f3d67ebcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f7f990b5eda20c78af8db6e8744ee5bacd7781be6aa112f584e707f3d67ebcd6->leave($__internal_f7f990b5eda20c78af8db6e8744ee5bacd7781be6aa112f584e707f3d67ebcd6_prof);

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
