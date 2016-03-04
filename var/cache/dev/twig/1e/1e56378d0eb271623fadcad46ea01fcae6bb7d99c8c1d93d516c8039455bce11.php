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
        $__internal_93fed4b73d133e050d1dbf60c4716667e89debb9f3af1563c8d49c9057d1c7fd = $this->env->getExtension("native_profiler");
        $__internal_93fed4b73d133e050d1dbf60c4716667e89debb9f3af1563c8d49c9057d1c7fd->enter($__internal_93fed4b73d133e050d1dbf60c4716667e89debb9f3af1563c8d49c9057d1c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fed4b73d133e050d1dbf60c4716667e89debb9f3af1563c8d49c9057d1c7fd->leave($__internal_93fed4b73d133e050d1dbf60c4716667e89debb9f3af1563c8d49c9057d1c7fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3da23c484e16581d113f5cfb10d91840b68172bea7497260cd998db2cc27e70 = $this->env->getExtension("native_profiler");
        $__internal_e3da23c484e16581d113f5cfb10d91840b68172bea7497260cd998db2cc27e70->enter($__internal_e3da23c484e16581d113f5cfb10d91840b68172bea7497260cd998db2cc27e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e3da23c484e16581d113f5cfb10d91840b68172bea7497260cd998db2cc27e70->leave($__internal_e3da23c484e16581d113f5cfb10d91840b68172bea7497260cd998db2cc27e70_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55d4b4ef365eebdc669a58e8e0057d547209115939c55c6e2964d0483408bcea = $this->env->getExtension("native_profiler");
        $__internal_55d4b4ef365eebdc669a58e8e0057d547209115939c55c6e2964d0483408bcea->enter($__internal_55d4b4ef365eebdc669a58e8e0057d547209115939c55c6e2964d0483408bcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55d4b4ef365eebdc669a58e8e0057d547209115939c55c6e2964d0483408bcea->leave($__internal_55d4b4ef365eebdc669a58e8e0057d547209115939c55c6e2964d0483408bcea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec998406da09c958d2957133369ff4dfb7138fe53b3e04e8d91357b6e86d1e6 = $this->env->getExtension("native_profiler");
        $__internal_9ec998406da09c958d2957133369ff4dfb7138fe53b3e04e8d91357b6e86d1e6->enter($__internal_9ec998406da09c958d2957133369ff4dfb7138fe53b3e04e8d91357b6e86d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ec998406da09c958d2957133369ff4dfb7138fe53b3e04e8d91357b6e86d1e6->leave($__internal_9ec998406da09c958d2957133369ff4dfb7138fe53b3e04e8d91357b6e86d1e6_prof);

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
