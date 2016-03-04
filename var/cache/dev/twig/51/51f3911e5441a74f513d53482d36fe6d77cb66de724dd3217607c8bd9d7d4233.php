<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4710112ee237f3b1e289b7cab9e913a7c2babd77e545eaf64625272528ef8eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_33a08188dd01cd0e9a18e712066ac7d3bc297f2f9e81090d4e2dab1280c45698 = $this->env->getExtension("native_profiler");
        $__internal_33a08188dd01cd0e9a18e712066ac7d3bc297f2f9e81090d4e2dab1280c45698->enter($__internal_33a08188dd01cd0e9a18e712066ac7d3bc297f2f9e81090d4e2dab1280c45698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a08188dd01cd0e9a18e712066ac7d3bc297f2f9e81090d4e2dab1280c45698->leave($__internal_33a08188dd01cd0e9a18e712066ac7d3bc297f2f9e81090d4e2dab1280c45698_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_533764711d723c12c2bf16cd959b078708a3a84de3efb1181aaa3d615cbdd2d5 = $this->env->getExtension("native_profiler");
        $__internal_533764711d723c12c2bf16cd959b078708a3a84de3efb1181aaa3d615cbdd2d5->enter($__internal_533764711d723c12c2bf16cd959b078708a3a84de3efb1181aaa3d615cbdd2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_533764711d723c12c2bf16cd959b078708a3a84de3efb1181aaa3d615cbdd2d5->leave($__internal_533764711d723c12c2bf16cd959b078708a3a84de3efb1181aaa3d615cbdd2d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbbc26a4fa7431dbac6b8e9da1732da2d816b97688c0581e9244391c195d47ce = $this->env->getExtension("native_profiler");
        $__internal_cbbc26a4fa7431dbac6b8e9da1732da2d816b97688c0581e9244391c195d47ce->enter($__internal_cbbc26a4fa7431dbac6b8e9da1732da2d816b97688c0581e9244391c195d47ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cbbc26a4fa7431dbac6b8e9da1732da2d816b97688c0581e9244391c195d47ce->leave($__internal_cbbc26a4fa7431dbac6b8e9da1732da2d816b97688c0581e9244391c195d47ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db0165e363ba96331818c4a9ac2b76fcc58c6fae1ae7ad35a67de14306f39afa = $this->env->getExtension("native_profiler");
        $__internal_db0165e363ba96331818c4a9ac2b76fcc58c6fae1ae7ad35a67de14306f39afa->enter($__internal_db0165e363ba96331818c4a9ac2b76fcc58c6fae1ae7ad35a67de14306f39afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db0165e363ba96331818c4a9ac2b76fcc58c6fae1ae7ad35a67de14306f39afa->leave($__internal_db0165e363ba96331818c4a9ac2b76fcc58c6fae1ae7ad35a67de14306f39afa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
