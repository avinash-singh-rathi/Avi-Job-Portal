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
        $__internal_f3d3ea12a4a3ef68eb5a74e20665530d76af0d6b4732c04ec5eca3f86c9d5425 = $this->env->getExtension("native_profiler");
        $__internal_f3d3ea12a4a3ef68eb5a74e20665530d76af0d6b4732c04ec5eca3f86c9d5425->enter($__internal_f3d3ea12a4a3ef68eb5a74e20665530d76af0d6b4732c04ec5eca3f86c9d5425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d3ea12a4a3ef68eb5a74e20665530d76af0d6b4732c04ec5eca3f86c9d5425->leave($__internal_f3d3ea12a4a3ef68eb5a74e20665530d76af0d6b4732c04ec5eca3f86c9d5425_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f00b33b90287a2a00e1269837ea35a3108ad49388785975a64de6c68ec0fd33 = $this->env->getExtension("native_profiler");
        $__internal_4f00b33b90287a2a00e1269837ea35a3108ad49388785975a64de6c68ec0fd33->enter($__internal_4f00b33b90287a2a00e1269837ea35a3108ad49388785975a64de6c68ec0fd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f00b33b90287a2a00e1269837ea35a3108ad49388785975a64de6c68ec0fd33->leave($__internal_4f00b33b90287a2a00e1269837ea35a3108ad49388785975a64de6c68ec0fd33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92a72acedc53d1e3b0df336da037541b3c6c8b413b3cda5589bcc5e94c04b653 = $this->env->getExtension("native_profiler");
        $__internal_92a72acedc53d1e3b0df336da037541b3c6c8b413b3cda5589bcc5e94c04b653->enter($__internal_92a72acedc53d1e3b0df336da037541b3c6c8b413b3cda5589bcc5e94c04b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92a72acedc53d1e3b0df336da037541b3c6c8b413b3cda5589bcc5e94c04b653->leave($__internal_92a72acedc53d1e3b0df336da037541b3c6c8b413b3cda5589bcc5e94c04b653_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea11e5f8d30567e374fc415b0ccae44a436a33252890cfb7d21397d670d8bb0 = $this->env->getExtension("native_profiler");
        $__internal_cea11e5f8d30567e374fc415b0ccae44a436a33252890cfb7d21397d670d8bb0->enter($__internal_cea11e5f8d30567e374fc415b0ccae44a436a33252890cfb7d21397d670d8bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cea11e5f8d30567e374fc415b0ccae44a436a33252890cfb7d21397d670d8bb0->leave($__internal_cea11e5f8d30567e374fc415b0ccae44a436a33252890cfb7d21397d670d8bb0_prof);

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
