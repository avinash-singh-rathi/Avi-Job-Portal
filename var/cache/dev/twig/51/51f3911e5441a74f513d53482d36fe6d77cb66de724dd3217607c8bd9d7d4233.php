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
        $__internal_4d489cfedc1fd13d52fbea89e6e22118752e321f890ed2d5080916b2ce9ccb8b = $this->env->getExtension("native_profiler");
        $__internal_4d489cfedc1fd13d52fbea89e6e22118752e321f890ed2d5080916b2ce9ccb8b->enter($__internal_4d489cfedc1fd13d52fbea89e6e22118752e321f890ed2d5080916b2ce9ccb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d489cfedc1fd13d52fbea89e6e22118752e321f890ed2d5080916b2ce9ccb8b->leave($__internal_4d489cfedc1fd13d52fbea89e6e22118752e321f890ed2d5080916b2ce9ccb8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5dd41ffa413a65830c5be970bf614f820a3b3be903cd0ed3a742fc43d8d704cc = $this->env->getExtension("native_profiler");
        $__internal_5dd41ffa413a65830c5be970bf614f820a3b3be903cd0ed3a742fc43d8d704cc->enter($__internal_5dd41ffa413a65830c5be970bf614f820a3b3be903cd0ed3a742fc43d8d704cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5dd41ffa413a65830c5be970bf614f820a3b3be903cd0ed3a742fc43d8d704cc->leave($__internal_5dd41ffa413a65830c5be970bf614f820a3b3be903cd0ed3a742fc43d8d704cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36fd663a36df01e59d81706a199d9fef37f0b4cf49efeaa164fe44f8bc2500d6 = $this->env->getExtension("native_profiler");
        $__internal_36fd663a36df01e59d81706a199d9fef37f0b4cf49efeaa164fe44f8bc2500d6->enter($__internal_36fd663a36df01e59d81706a199d9fef37f0b4cf49efeaa164fe44f8bc2500d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36fd663a36df01e59d81706a199d9fef37f0b4cf49efeaa164fe44f8bc2500d6->leave($__internal_36fd663a36df01e59d81706a199d9fef37f0b4cf49efeaa164fe44f8bc2500d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04a65f4e9f2eba7fa0d5c9303e4193287f92fc68eda04d3e6c81209f1ac63c4d = $this->env->getExtension("native_profiler");
        $__internal_04a65f4e9f2eba7fa0d5c9303e4193287f92fc68eda04d3e6c81209f1ac63c4d->enter($__internal_04a65f4e9f2eba7fa0d5c9303e4193287f92fc68eda04d3e6c81209f1ac63c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04a65f4e9f2eba7fa0d5c9303e4193287f92fc68eda04d3e6c81209f1ac63c4d->leave($__internal_04a65f4e9f2eba7fa0d5c9303e4193287f92fc68eda04d3e6c81209f1ac63c4d_prof);

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
