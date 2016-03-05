<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf96efb93e97fac54b7b1cd4d53baae7a89ba5e28ea95de658c97b107a77ff11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c8c8956173b89fe52c1ac9fefff4250070d3cd02e2268ed017f90e0578abb110 = $this->env->getExtension("native_profiler");
        $__internal_c8c8956173b89fe52c1ac9fefff4250070d3cd02e2268ed017f90e0578abb110->enter($__internal_c8c8956173b89fe52c1ac9fefff4250070d3cd02e2268ed017f90e0578abb110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c8956173b89fe52c1ac9fefff4250070d3cd02e2268ed017f90e0578abb110->leave($__internal_c8c8956173b89fe52c1ac9fefff4250070d3cd02e2268ed017f90e0578abb110_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e734686b7da250472f2c84eaf22bd95bf47a5157af999ac971fb6c36a1e66dcc = $this->env->getExtension("native_profiler");
        $__internal_e734686b7da250472f2c84eaf22bd95bf47a5157af999ac971fb6c36a1e66dcc->enter($__internal_e734686b7da250472f2c84eaf22bd95bf47a5157af999ac971fb6c36a1e66dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e734686b7da250472f2c84eaf22bd95bf47a5157af999ac971fb6c36a1e66dcc->leave($__internal_e734686b7da250472f2c84eaf22bd95bf47a5157af999ac971fb6c36a1e66dcc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7fcf53cdcf04b7786ca1d3e37cc863cdecadc85236716b3653ffa8ab31e298 = $this->env->getExtension("native_profiler");
        $__internal_8c7fcf53cdcf04b7786ca1d3e37cc863cdecadc85236716b3653ffa8ab31e298->enter($__internal_8c7fcf53cdcf04b7786ca1d3e37cc863cdecadc85236716b3653ffa8ab31e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c7fcf53cdcf04b7786ca1d3e37cc863cdecadc85236716b3653ffa8ab31e298->leave($__internal_8c7fcf53cdcf04b7786ca1d3e37cc863cdecadc85236716b3653ffa8ab31e298_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34407704c9e7e643275728822688ff8423a4c19636f00c7c24420ab631db6096 = $this->env->getExtension("native_profiler");
        $__internal_34407704c9e7e643275728822688ff8423a4c19636f00c7c24420ab631db6096->enter($__internal_34407704c9e7e643275728822688ff8423a4c19636f00c7c24420ab631db6096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_34407704c9e7e643275728822688ff8423a4c19636f00c7c24420ab631db6096->leave($__internal_34407704c9e7e643275728822688ff8423a4c19636f00c7c24420ab631db6096_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
