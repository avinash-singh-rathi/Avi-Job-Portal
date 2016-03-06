<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_36e751534660eef220d2e5a16d75242695dffc8c4ddaaeb6a34c43fa352cea59 extends Twig_Template
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
        $__internal_b1787ca574bbe49f069523328ea272361e48bac3b18ba70d0c1ed34e12f548f9 = $this->env->getExtension("native_profiler");
        $__internal_b1787ca574bbe49f069523328ea272361e48bac3b18ba70d0c1ed34e12f548f9->enter($__internal_b1787ca574bbe49f069523328ea272361e48bac3b18ba70d0c1ed34e12f548f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1787ca574bbe49f069523328ea272361e48bac3b18ba70d0c1ed34e12f548f9->leave($__internal_b1787ca574bbe49f069523328ea272361e48bac3b18ba70d0c1ed34e12f548f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98d3100d62748808bf5f9605f096929f126aea0ac44c750240e2e1c62d330a2f = $this->env->getExtension("native_profiler");
        $__internal_98d3100d62748808bf5f9605f096929f126aea0ac44c750240e2e1c62d330a2f->enter($__internal_98d3100d62748808bf5f9605f096929f126aea0ac44c750240e2e1c62d330a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98d3100d62748808bf5f9605f096929f126aea0ac44c750240e2e1c62d330a2f->leave($__internal_98d3100d62748808bf5f9605f096929f126aea0ac44c750240e2e1c62d330a2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad07ebed05ce5a91b3efccf7a3d6bea13d2b0d576b80fcf997c30cbed455871 = $this->env->getExtension("native_profiler");
        $__internal_8ad07ebed05ce5a91b3efccf7a3d6bea13d2b0d576b80fcf997c30cbed455871->enter($__internal_8ad07ebed05ce5a91b3efccf7a3d6bea13d2b0d576b80fcf997c30cbed455871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ad07ebed05ce5a91b3efccf7a3d6bea13d2b0d576b80fcf997c30cbed455871->leave($__internal_8ad07ebed05ce5a91b3efccf7a3d6bea13d2b0d576b80fcf997c30cbed455871_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee92acb75ab3b83ee2ba19cbd7896cbbdd0da1bba957095a5edc8d97c66a6523 = $this->env->getExtension("native_profiler");
        $__internal_ee92acb75ab3b83ee2ba19cbd7896cbbdd0da1bba957095a5edc8d97c66a6523->enter($__internal_ee92acb75ab3b83ee2ba19cbd7896cbbdd0da1bba957095a5edc8d97c66a6523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ee92acb75ab3b83ee2ba19cbd7896cbbdd0da1bba957095a5edc8d97c66a6523->leave($__internal_ee92acb75ab3b83ee2ba19cbd7896cbbdd0da1bba957095a5edc8d97c66a6523_prof);

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
