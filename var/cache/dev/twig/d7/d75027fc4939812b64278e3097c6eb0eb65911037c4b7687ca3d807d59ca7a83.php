<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fc7ef68550e499ac5b1458071349cdba47a65d50583a3a02a6641ac7b50c42ed extends Twig_Template
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
        $__internal_81d976f098f98f641adfde781ae1b3e095cb4bf51eca3b4ec5032d9530804b26 = $this->env->getExtension("native_profiler");
        $__internal_81d976f098f98f641adfde781ae1b3e095cb4bf51eca3b4ec5032d9530804b26->enter($__internal_81d976f098f98f641adfde781ae1b3e095cb4bf51eca3b4ec5032d9530804b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_81d976f098f98f641adfde781ae1b3e095cb4bf51eca3b4ec5032d9530804b26->leave($__internal_81d976f098f98f641adfde781ae1b3e095cb4bf51eca3b4ec5032d9530804b26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
