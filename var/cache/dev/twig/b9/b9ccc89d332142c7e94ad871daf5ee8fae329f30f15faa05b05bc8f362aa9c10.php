<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c079f578260fbe000f62e599fdc84e58a15c9474d5cda42aecdb87d07fa06444 extends Twig_Template
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
        $__internal_4c6bbadc62bd2ceae77e69084efe6b69be68ae6a7441a7f5d5945eed0231e370 = $this->env->getExtension("native_profiler");
        $__internal_4c6bbadc62bd2ceae77e69084efe6b69be68ae6a7441a7f5d5945eed0231e370->enter($__internal_4c6bbadc62bd2ceae77e69084efe6b69be68ae6a7441a7f5d5945eed0231e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4c6bbadc62bd2ceae77e69084efe6b69be68ae6a7441a7f5d5945eed0231e370->leave($__internal_4c6bbadc62bd2ceae77e69084efe6b69be68ae6a7441a7f5d5945eed0231e370_prof);

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
