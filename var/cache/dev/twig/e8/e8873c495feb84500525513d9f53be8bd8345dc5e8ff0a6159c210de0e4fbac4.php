<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3b3c34b704bd6f92d5cacb4b415fd5276c72c684809e7f8867e57a682665d3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_31a5a3e5a31db3e65b59b3804c341df5ec37e847401bf9724f9368b10b104fc6 = $this->env->getExtension("native_profiler");
        $__internal_31a5a3e5a31db3e65b59b3804c341df5ec37e847401bf9724f9368b10b104fc6->enter($__internal_31a5a3e5a31db3e65b59b3804c341df5ec37e847401bf9724f9368b10b104fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a5a3e5a31db3e65b59b3804c341df5ec37e847401bf9724f9368b10b104fc6->leave($__internal_31a5a3e5a31db3e65b59b3804c341df5ec37e847401bf9724f9368b10b104fc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ca5528bfd7c916883b53e26243d46db5a6f9e1458723fa00e5f43804f373ab = $this->env->getExtension("native_profiler");
        $__internal_a8ca5528bfd7c916883b53e26243d46db5a6f9e1458723fa00e5f43804f373ab->enter($__internal_a8ca5528bfd7c916883b53e26243d46db5a6f9e1458723fa00e5f43804f373ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8ca5528bfd7c916883b53e26243d46db5a6f9e1458723fa00e5f43804f373ab->leave($__internal_a8ca5528bfd7c916883b53e26243d46db5a6f9e1458723fa00e5f43804f373ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94233cac7b7f427c9c11fc4cfd06004152f2d94258e43d0948a538b9598d197 = $this->env->getExtension("native_profiler");
        $__internal_f94233cac7b7f427c9c11fc4cfd06004152f2d94258e43d0948a538b9598d197->enter($__internal_f94233cac7b7f427c9c11fc4cfd06004152f2d94258e43d0948a538b9598d197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f94233cac7b7f427c9c11fc4cfd06004152f2d94258e43d0948a538b9598d197->leave($__internal_f94233cac7b7f427c9c11fc4cfd06004152f2d94258e43d0948a538b9598d197_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
