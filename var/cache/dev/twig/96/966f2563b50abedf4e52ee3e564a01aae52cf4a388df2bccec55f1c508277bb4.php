<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1e8ac75076512fafb15b70a77e7793a513d8a34f1f6b872ccf68cbcbbe42fc43 extends Twig_Template
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
        $__internal_2e7c4d5a6c9da26d90ecd2976d47e057f6e09477cca422bcf19739d91814aa14 = $this->env->getExtension("native_profiler");
        $__internal_2e7c4d5a6c9da26d90ecd2976d47e057f6e09477cca422bcf19739d91814aa14->enter($__internal_2e7c4d5a6c9da26d90ecd2976d47e057f6e09477cca422bcf19739d91814aa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7c4d5a6c9da26d90ecd2976d47e057f6e09477cca422bcf19739d91814aa14->leave($__internal_2e7c4d5a6c9da26d90ecd2976d47e057f6e09477cca422bcf19739d91814aa14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0462c213eeb3b657e2b7195bcd3a3701f4bf8ad3f637f26efb5c1ca3b3137698 = $this->env->getExtension("native_profiler");
        $__internal_0462c213eeb3b657e2b7195bcd3a3701f4bf8ad3f637f26efb5c1ca3b3137698->enter($__internal_0462c213eeb3b657e2b7195bcd3a3701f4bf8ad3f637f26efb5c1ca3b3137698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0462c213eeb3b657e2b7195bcd3a3701f4bf8ad3f637f26efb5c1ca3b3137698->leave($__internal_0462c213eeb3b657e2b7195bcd3a3701f4bf8ad3f637f26efb5c1ca3b3137698_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_938c591fd7ec0e118a90d1e9e9243bfbdc8c4fd5a19b623a3d8033b43d75979f = $this->env->getExtension("native_profiler");
        $__internal_938c591fd7ec0e118a90d1e9e9243bfbdc8c4fd5a19b623a3d8033b43d75979f->enter($__internal_938c591fd7ec0e118a90d1e9e9243bfbdc8c4fd5a19b623a3d8033b43d75979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_938c591fd7ec0e118a90d1e9e9243bfbdc8c4fd5a19b623a3d8033b43d75979f->leave($__internal_938c591fd7ec0e118a90d1e9e9243bfbdc8c4fd5a19b623a3d8033b43d75979f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0aeabe84cc95f5b3eabf15620e65623cdd0293bd591e15f1c425cd2e79afb7b = $this->env->getExtension("native_profiler");
        $__internal_e0aeabe84cc95f5b3eabf15620e65623cdd0293bd591e15f1c425cd2e79afb7b->enter($__internal_e0aeabe84cc95f5b3eabf15620e65623cdd0293bd591e15f1c425cd2e79afb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e0aeabe84cc95f5b3eabf15620e65623cdd0293bd591e15f1c425cd2e79afb7b->leave($__internal_e0aeabe84cc95f5b3eabf15620e65623cdd0293bd591e15f1c425cd2e79afb7b_prof);

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
