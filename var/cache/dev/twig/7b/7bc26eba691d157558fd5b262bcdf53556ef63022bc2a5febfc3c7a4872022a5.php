<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a584a14bf35be393b8153ae805212c70697185ed6a9e18813625762395302a6d extends Twig_Template
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
        $__internal_9ea662769a6b080a71721c6ba8282f4036dab21e07969895316338bd6c323173 = $this->env->getExtension("native_profiler");
        $__internal_9ea662769a6b080a71721c6ba8282f4036dab21e07969895316338bd6c323173->enter($__internal_9ea662769a6b080a71721c6ba8282f4036dab21e07969895316338bd6c323173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ea662769a6b080a71721c6ba8282f4036dab21e07969895316338bd6c323173->leave($__internal_9ea662769a6b080a71721c6ba8282f4036dab21e07969895316338bd6c323173_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b064aac70c16118dc3e5ba398a921f8212166a2674fc9f5b371ae1d970f8d688 = $this->env->getExtension("native_profiler");
        $__internal_b064aac70c16118dc3e5ba398a921f8212166a2674fc9f5b371ae1d970f8d688->enter($__internal_b064aac70c16118dc3e5ba398a921f8212166a2674fc9f5b371ae1d970f8d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b064aac70c16118dc3e5ba398a921f8212166a2674fc9f5b371ae1d970f8d688->leave($__internal_b064aac70c16118dc3e5ba398a921f8212166a2674fc9f5b371ae1d970f8d688_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
