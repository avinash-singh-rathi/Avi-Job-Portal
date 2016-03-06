<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7a676f506d77977a513869d625f518e59cc5017982d425e613e05d9c3ab3d403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa63a2d31998f04bcb885812309f711e8fdeeb36500341e879c82144ed256984 = $this->env->getExtension("native_profiler");
        $__internal_fa63a2d31998f04bcb885812309f711e8fdeeb36500341e879c82144ed256984->enter($__internal_fa63a2d31998f04bcb885812309f711e8fdeeb36500341e879c82144ed256984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa63a2d31998f04bcb885812309f711e8fdeeb36500341e879c82144ed256984->leave($__internal_fa63a2d31998f04bcb885812309f711e8fdeeb36500341e879c82144ed256984_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2014f783ca7f43da28ea4eb17e53dbc40969c338dc95c67fb1dc973afa6a0341 = $this->env->getExtension("native_profiler");
        $__internal_2014f783ca7f43da28ea4eb17e53dbc40969c338dc95c67fb1dc973afa6a0341->enter($__internal_2014f783ca7f43da28ea4eb17e53dbc40969c338dc95c67fb1dc973afa6a0341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2014f783ca7f43da28ea4eb17e53dbc40969c338dc95c67fb1dc973afa6a0341->leave($__internal_2014f783ca7f43da28ea4eb17e53dbc40969c338dc95c67fb1dc973afa6a0341_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
