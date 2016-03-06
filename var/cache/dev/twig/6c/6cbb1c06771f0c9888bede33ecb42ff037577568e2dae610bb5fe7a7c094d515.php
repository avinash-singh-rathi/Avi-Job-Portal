<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eacd8b289c8c48d0ad1237780be8b69285372251c5299e4ccb510efb68f00776 extends Twig_Template
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
        $__internal_5d8c9a439696d226e470d2fe04ffd645c56d54b3ac8f5be5da05f1e9e7247842 = $this->env->getExtension("native_profiler");
        $__internal_5d8c9a439696d226e470d2fe04ffd645c56d54b3ac8f5be5da05f1e9e7247842->enter($__internal_5d8c9a439696d226e470d2fe04ffd645c56d54b3ac8f5be5da05f1e9e7247842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5d8c9a439696d226e470d2fe04ffd645c56d54b3ac8f5be5da05f1e9e7247842->leave($__internal_5d8c9a439696d226e470d2fe04ffd645c56d54b3ac8f5be5da05f1e9e7247842_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8530946ae03f9a3bcf56db679e4a5be0c68f4fd154cf4320d86eeb1258bb0042 = $this->env->getExtension("native_profiler");
        $__internal_8530946ae03f9a3bcf56db679e4a5be0c68f4fd154cf4320d86eeb1258bb0042->enter($__internal_8530946ae03f9a3bcf56db679e4a5be0c68f4fd154cf4320d86eeb1258bb0042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8530946ae03f9a3bcf56db679e4a5be0c68f4fd154cf4320d86eeb1258bb0042->leave($__internal_8530946ae03f9a3bcf56db679e4a5be0c68f4fd154cf4320d86eeb1258bb0042_prof);

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
