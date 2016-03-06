<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b7fa9a76189f4b763d006ebd0c3705c61d0df984c683194f75b2633519d7441b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_8d018e4b1668964b6f499147ad50b1da9f1681c0304014d095f97764a5a25582 = $this->env->getExtension("native_profiler");
        $__internal_8d018e4b1668964b6f499147ad50b1da9f1681c0304014d095f97764a5a25582->enter($__internal_8d018e4b1668964b6f499147ad50b1da9f1681c0304014d095f97764a5a25582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d018e4b1668964b6f499147ad50b1da9f1681c0304014d095f97764a5a25582->leave($__internal_8d018e4b1668964b6f499147ad50b1da9f1681c0304014d095f97764a5a25582_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_206b4086a360a06a35d8ceeff106b6313ab7f66b86bf8dbea775c17c873826e3 = $this->env->getExtension("native_profiler");
        $__internal_206b4086a360a06a35d8ceeff106b6313ab7f66b86bf8dbea775c17c873826e3->enter($__internal_206b4086a360a06a35d8ceeff106b6313ab7f66b86bf8dbea775c17c873826e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_206b4086a360a06a35d8ceeff106b6313ab7f66b86bf8dbea775c17c873826e3->leave($__internal_206b4086a360a06a35d8ceeff106b6313ab7f66b86bf8dbea775c17c873826e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7200e43b571a08eeeeb00f83c47d251a907b1c1387893a82bf9f0f3764f23f = $this->env->getExtension("native_profiler");
        $__internal_eb7200e43b571a08eeeeb00f83c47d251a907b1c1387893a82bf9f0f3764f23f->enter($__internal_eb7200e43b571a08eeeeb00f83c47d251a907b1c1387893a82bf9f0f3764f23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb7200e43b571a08eeeeb00f83c47d251a907b1c1387893a82bf9f0f3764f23f->leave($__internal_eb7200e43b571a08eeeeb00f83c47d251a907b1c1387893a82bf9f0f3764f23f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
