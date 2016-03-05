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
        $__internal_caabc413122cd397489603bdb16ac73c7b5321eecb4e9901f9774950c8eec5bd = $this->env->getExtension("native_profiler");
        $__internal_caabc413122cd397489603bdb16ac73c7b5321eecb4e9901f9774950c8eec5bd->enter($__internal_caabc413122cd397489603bdb16ac73c7b5321eecb4e9901f9774950c8eec5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caabc413122cd397489603bdb16ac73c7b5321eecb4e9901f9774950c8eec5bd->leave($__internal_caabc413122cd397489603bdb16ac73c7b5321eecb4e9901f9774950c8eec5bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16d5721cd9094ad92eccee9712e6d2c1f1f79c7fc5ae97e4ef86040abe3a88ab = $this->env->getExtension("native_profiler");
        $__internal_16d5721cd9094ad92eccee9712e6d2c1f1f79c7fc5ae97e4ef86040abe3a88ab->enter($__internal_16d5721cd9094ad92eccee9712e6d2c1f1f79c7fc5ae97e4ef86040abe3a88ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16d5721cd9094ad92eccee9712e6d2c1f1f79c7fc5ae97e4ef86040abe3a88ab->leave($__internal_16d5721cd9094ad92eccee9712e6d2c1f1f79c7fc5ae97e4ef86040abe3a88ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30c96ea256e06d999caeb0197105aaa82eaadb048572ad26bc1dac4772575f44 = $this->env->getExtension("native_profiler");
        $__internal_30c96ea256e06d999caeb0197105aaa82eaadb048572ad26bc1dac4772575f44->enter($__internal_30c96ea256e06d999caeb0197105aaa82eaadb048572ad26bc1dac4772575f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30c96ea256e06d999caeb0197105aaa82eaadb048572ad26bc1dac4772575f44->leave($__internal_30c96ea256e06d999caeb0197105aaa82eaadb048572ad26bc1dac4772575f44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63531799046abb6c13a06df646fb3988aa20169e264e6aa742b51c950f9f9531 = $this->env->getExtension("native_profiler");
        $__internal_63531799046abb6c13a06df646fb3988aa20169e264e6aa742b51c950f9f9531->enter($__internal_63531799046abb6c13a06df646fb3988aa20169e264e6aa742b51c950f9f9531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63531799046abb6c13a06df646fb3988aa20169e264e6aa742b51c950f9f9531->leave($__internal_63531799046abb6c13a06df646fb3988aa20169e264e6aa742b51c950f9f9531_prof);

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
