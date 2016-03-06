<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e13aa218c22ab6f21fca66c24c56533b571b381f32caeeb22632231663893aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_9d2b7ab3e9a682d95cf6868df5674e1724f4d0c4b6ca7b003e2a2bb4d34d04d0 = $this->env->getExtension("native_profiler");
        $__internal_9d2b7ab3e9a682d95cf6868df5674e1724f4d0c4b6ca7b003e2a2bb4d34d04d0->enter($__internal_9d2b7ab3e9a682d95cf6868df5674e1724f4d0c4b6ca7b003e2a2bb4d34d04d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2b7ab3e9a682d95cf6868df5674e1724f4d0c4b6ca7b003e2a2bb4d34d04d0->leave($__internal_9d2b7ab3e9a682d95cf6868df5674e1724f4d0c4b6ca7b003e2a2bb4d34d04d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c9c4cf8eda2ed65bfff7ee7843784abef389e97dd27defc5272a595b83a11f6 = $this->env->getExtension("native_profiler");
        $__internal_0c9c4cf8eda2ed65bfff7ee7843784abef389e97dd27defc5272a595b83a11f6->enter($__internal_0c9c4cf8eda2ed65bfff7ee7843784abef389e97dd27defc5272a595b83a11f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c9c4cf8eda2ed65bfff7ee7843784abef389e97dd27defc5272a595b83a11f6->leave($__internal_0c9c4cf8eda2ed65bfff7ee7843784abef389e97dd27defc5272a595b83a11f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5a6307c9ccc286dc6654147224e5431c8057c5fab9cef0f64d4616cb5d98c09 = $this->env->getExtension("native_profiler");
        $__internal_a5a6307c9ccc286dc6654147224e5431c8057c5fab9cef0f64d4616cb5d98c09->enter($__internal_a5a6307c9ccc286dc6654147224e5431c8057c5fab9cef0f64d4616cb5d98c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5a6307c9ccc286dc6654147224e5431c8057c5fab9cef0f64d4616cb5d98c09->leave($__internal_a5a6307c9ccc286dc6654147224e5431c8057c5fab9cef0f64d4616cb5d98c09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8723d139c173dc6caa206ab9e9e9a1f9d628bc7ecbb37e407056b3485ad8522 = $this->env->getExtension("native_profiler");
        $__internal_a8723d139c173dc6caa206ab9e9e9a1f9d628bc7ecbb37e407056b3485ad8522->enter($__internal_a8723d139c173dc6caa206ab9e9e9a1f9d628bc7ecbb37e407056b3485ad8522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a8723d139c173dc6caa206ab9e9e9a1f9d628bc7ecbb37e407056b3485ad8522->leave($__internal_a8723d139c173dc6caa206ab9e9e9a1f9d628bc7ecbb37e407056b3485ad8522_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
