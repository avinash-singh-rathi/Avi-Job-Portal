<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_231ce4994dbb915bdcd1f4d74c4b50bc4822c6f5814d780575141ec9fc6e63c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_22fa1d54396d62570f853a30fd0297d5ecfe3c18519c2ad10583c57096cbe62c = $this->env->getExtension("native_profiler");
        $__internal_22fa1d54396d62570f853a30fd0297d5ecfe3c18519c2ad10583c57096cbe62c->enter($__internal_22fa1d54396d62570f853a30fd0297d5ecfe3c18519c2ad10583c57096cbe62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22fa1d54396d62570f853a30fd0297d5ecfe3c18519c2ad10583c57096cbe62c->leave($__internal_22fa1d54396d62570f853a30fd0297d5ecfe3c18519c2ad10583c57096cbe62c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f786d3b523dafcdc057097c4d5757288aafe9de6e044645972c95d0d918759d = $this->env->getExtension("native_profiler");
        $__internal_5f786d3b523dafcdc057097c4d5757288aafe9de6e044645972c95d0d918759d->enter($__internal_5f786d3b523dafcdc057097c4d5757288aafe9de6e044645972c95d0d918759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f786d3b523dafcdc057097c4d5757288aafe9de6e044645972c95d0d918759d->leave($__internal_5f786d3b523dafcdc057097c4d5757288aafe9de6e044645972c95d0d918759d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6384e7abaa99cee3eae6df349e80d6712adad402a46599ef99d7569349ab5f7f = $this->env->getExtension("native_profiler");
        $__internal_6384e7abaa99cee3eae6df349e80d6712adad402a46599ef99d7569349ab5f7f->enter($__internal_6384e7abaa99cee3eae6df349e80d6712adad402a46599ef99d7569349ab5f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6384e7abaa99cee3eae6df349e80d6712adad402a46599ef99d7569349ab5f7f->leave($__internal_6384e7abaa99cee3eae6df349e80d6712adad402a46599ef99d7569349ab5f7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_875c70faee76b77cc48c5daf99cec01c45c34e66249f5f53fcbc0c2ebfe17abf = $this->env->getExtension("native_profiler");
        $__internal_875c70faee76b77cc48c5daf99cec01c45c34e66249f5f53fcbc0c2ebfe17abf->enter($__internal_875c70faee76b77cc48c5daf99cec01c45c34e66249f5f53fcbc0c2ebfe17abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_875c70faee76b77cc48c5daf99cec01c45c34e66249f5f53fcbc0c2ebfe17abf->leave($__internal_875c70faee76b77cc48c5daf99cec01c45c34e66249f5f53fcbc0c2ebfe17abf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
