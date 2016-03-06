<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66c9103109e3f1bc5caed6073bd3cc7b4669924b3812a97c6f586b74cc545462 extends Twig_Template
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
        $__internal_c5b4b1fd3d53d9454a385689cc439e158d220a5026e4888c7ecc1905134fcb16 = $this->env->getExtension("native_profiler");
        $__internal_c5b4b1fd3d53d9454a385689cc439e158d220a5026e4888c7ecc1905134fcb16->enter($__internal_c5b4b1fd3d53d9454a385689cc439e158d220a5026e4888c7ecc1905134fcb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b4b1fd3d53d9454a385689cc439e158d220a5026e4888c7ecc1905134fcb16->leave($__internal_c5b4b1fd3d53d9454a385689cc439e158d220a5026e4888c7ecc1905134fcb16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_682301d7c7437ca584aee608d6840403f0894abcca59f792715f2cffe28a3eee = $this->env->getExtension("native_profiler");
        $__internal_682301d7c7437ca584aee608d6840403f0894abcca59f792715f2cffe28a3eee->enter($__internal_682301d7c7437ca584aee608d6840403f0894abcca59f792715f2cffe28a3eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_682301d7c7437ca584aee608d6840403f0894abcca59f792715f2cffe28a3eee->leave($__internal_682301d7c7437ca584aee608d6840403f0894abcca59f792715f2cffe28a3eee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b851f8292770278dfeecf4afc88dbec00611187a1c83d488f74636ff37b09c5 = $this->env->getExtension("native_profiler");
        $__internal_2b851f8292770278dfeecf4afc88dbec00611187a1c83d488f74636ff37b09c5->enter($__internal_2b851f8292770278dfeecf4afc88dbec00611187a1c83d488f74636ff37b09c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b851f8292770278dfeecf4afc88dbec00611187a1c83d488f74636ff37b09c5->leave($__internal_2b851f8292770278dfeecf4afc88dbec00611187a1c83d488f74636ff37b09c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a909702efdf92c385216942d46fc0438173956c1dcfe774daba801f09f7a53de = $this->env->getExtension("native_profiler");
        $__internal_a909702efdf92c385216942d46fc0438173956c1dcfe774daba801f09f7a53de->enter($__internal_a909702efdf92c385216942d46fc0438173956c1dcfe774daba801f09f7a53de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a909702efdf92c385216942d46fc0438173956c1dcfe774daba801f09f7a53de->leave($__internal_a909702efdf92c385216942d46fc0438173956c1dcfe774daba801f09f7a53de_prof);

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
