<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_45d143037d645d3ef94301b3b6759bc44c986b70e7fe35789a4a859272385a04 extends Twig_Template
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
        $__internal_d759bc5c0f811aa0b341a8638c9ab521d6f5030338811577a67e206a0526bf00 = $this->env->getExtension("native_profiler");
        $__internal_d759bc5c0f811aa0b341a8638c9ab521d6f5030338811577a67e206a0526bf00->enter($__internal_d759bc5c0f811aa0b341a8638c9ab521d6f5030338811577a67e206a0526bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d759bc5c0f811aa0b341a8638c9ab521d6f5030338811577a67e206a0526bf00->leave($__internal_d759bc5c0f811aa0b341a8638c9ab521d6f5030338811577a67e206a0526bf00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5becfc42e4630612b0866f2cb09c843537066eb4d117d92877c77d0ccf4d8c5f = $this->env->getExtension("native_profiler");
        $__internal_5becfc42e4630612b0866f2cb09c843537066eb4d117d92877c77d0ccf4d8c5f->enter($__internal_5becfc42e4630612b0866f2cb09c843537066eb4d117d92877c77d0ccf4d8c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5becfc42e4630612b0866f2cb09c843537066eb4d117d92877c77d0ccf4d8c5f->leave($__internal_5becfc42e4630612b0866f2cb09c843537066eb4d117d92877c77d0ccf4d8c5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f622058f8be99e1412bb5370d4a12985df4ed58875999d6bf6064ed5f7e0abaa = $this->env->getExtension("native_profiler");
        $__internal_f622058f8be99e1412bb5370d4a12985df4ed58875999d6bf6064ed5f7e0abaa->enter($__internal_f622058f8be99e1412bb5370d4a12985df4ed58875999d6bf6064ed5f7e0abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f622058f8be99e1412bb5370d4a12985df4ed58875999d6bf6064ed5f7e0abaa->leave($__internal_f622058f8be99e1412bb5370d4a12985df4ed58875999d6bf6064ed5f7e0abaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b38824f005c63b909ef659567209e732d38a7a79db07d6e80262fe84cf251100 = $this->env->getExtension("native_profiler");
        $__internal_b38824f005c63b909ef659567209e732d38a7a79db07d6e80262fe84cf251100->enter($__internal_b38824f005c63b909ef659567209e732d38a7a79db07d6e80262fe84cf251100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b38824f005c63b909ef659567209e732d38a7a79db07d6e80262fe84cf251100->leave($__internal_b38824f005c63b909ef659567209e732d38a7a79db07d6e80262fe84cf251100_prof);

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
