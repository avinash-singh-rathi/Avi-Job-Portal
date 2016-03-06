<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0a94c3ce1e8a3318eb94b742c0762221ac58733b5ce4f1475388a58006116f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9978720cf30b0504718ccef24ccfb7a6724ba517d69ec381c8563800ffd0d648 = $this->env->getExtension("native_profiler");
        $__internal_9978720cf30b0504718ccef24ccfb7a6724ba517d69ec381c8563800ffd0d648->enter($__internal_9978720cf30b0504718ccef24ccfb7a6724ba517d69ec381c8563800ffd0d648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9978720cf30b0504718ccef24ccfb7a6724ba517d69ec381c8563800ffd0d648->leave($__internal_9978720cf30b0504718ccef24ccfb7a6724ba517d69ec381c8563800ffd0d648_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9da0b5145449f6baebb30b8a1a6bf11d3c07bda23c4050f56d03d98fd97d749a = $this->env->getExtension("native_profiler");
        $__internal_9da0b5145449f6baebb30b8a1a6bf11d3c07bda23c4050f56d03d98fd97d749a->enter($__internal_9da0b5145449f6baebb30b8a1a6bf11d3c07bda23c4050f56d03d98fd97d749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9da0b5145449f6baebb30b8a1a6bf11d3c07bda23c4050f56d03d98fd97d749a->leave($__internal_9da0b5145449f6baebb30b8a1a6bf11d3c07bda23c4050f56d03d98fd97d749a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_138ca775b33820b42ee15c4d6fc328f7389d4d5461b6a753b3b06b80fcfb02c6 = $this->env->getExtension("native_profiler");
        $__internal_138ca775b33820b42ee15c4d6fc328f7389d4d5461b6a753b3b06b80fcfb02c6->enter($__internal_138ca775b33820b42ee15c4d6fc328f7389d4d5461b6a753b3b06b80fcfb02c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_138ca775b33820b42ee15c4d6fc328f7389d4d5461b6a753b3b06b80fcfb02c6->leave($__internal_138ca775b33820b42ee15c4d6fc328f7389d4d5461b6a753b3b06b80fcfb02c6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a091c278d154700420acc225e9276e6053294c521674ed62b74b732ed3a6989b = $this->env->getExtension("native_profiler");
        $__internal_a091c278d154700420acc225e9276e6053294c521674ed62b74b732ed3a6989b->enter($__internal_a091c278d154700420acc225e9276e6053294c521674ed62b74b732ed3a6989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a091c278d154700420acc225e9276e6053294c521674ed62b74b732ed3a6989b->leave($__internal_a091c278d154700420acc225e9276e6053294c521674ed62b74b732ed3a6989b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
