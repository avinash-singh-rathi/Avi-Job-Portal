<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8909d5a278e2e01cbaa1aac6593ea1df454143b95828d5772d85ae545ac6094c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa6884cd441ae89e3b18329597c7e98c3e507ac33927f814e21a45f3be6f95e7 = $this->env->getExtension("native_profiler");
        $__internal_aa6884cd441ae89e3b18329597c7e98c3e507ac33927f814e21a45f3be6f95e7->enter($__internal_aa6884cd441ae89e3b18329597c7e98c3e507ac33927f814e21a45f3be6f95e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6884cd441ae89e3b18329597c7e98c3e507ac33927f814e21a45f3be6f95e7->leave($__internal_aa6884cd441ae89e3b18329597c7e98c3e507ac33927f814e21a45f3be6f95e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90e33f9b4f82f647af09b902296f9b1877936e398597b0cd16cd432204e5a92 = $this->env->getExtension("native_profiler");
        $__internal_e90e33f9b4f82f647af09b902296f9b1877936e398597b0cd16cd432204e5a92->enter($__internal_e90e33f9b4f82f647af09b902296f9b1877936e398597b0cd16cd432204e5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e90e33f9b4f82f647af09b902296f9b1877936e398597b0cd16cd432204e5a92->leave($__internal_e90e33f9b4f82f647af09b902296f9b1877936e398597b0cd16cd432204e5a92_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fcb5c8c7c1a020668d8f3c1666e7fe84d701fc25eb5737b6c6c00d8b0f35c15 = $this->env->getExtension("native_profiler");
        $__internal_6fcb5c8c7c1a020668d8f3c1666e7fe84d701fc25eb5737b6c6c00d8b0f35c15->enter($__internal_6fcb5c8c7c1a020668d8f3c1666e7fe84d701fc25eb5737b6c6c00d8b0f35c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6fcb5c8c7c1a020668d8f3c1666e7fe84d701fc25eb5737b6c6c00d8b0f35c15->leave($__internal_6fcb5c8c7c1a020668d8f3c1666e7fe84d701fc25eb5737b6c6c00d8b0f35c15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
