<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5c1adf04f7591dc17c3720f5acd39f1fb623c1df8cb8ea8ac80679b4e62dafe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_095aed0cef7277a5ab5568ae4470b0a4668c36828c9d8dfd2880ff5913db0f85 = $this->env->getExtension("native_profiler");
        $__internal_095aed0cef7277a5ab5568ae4470b0a4668c36828c9d8dfd2880ff5913db0f85->enter($__internal_095aed0cef7277a5ab5568ae4470b0a4668c36828c9d8dfd2880ff5913db0f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095aed0cef7277a5ab5568ae4470b0a4668c36828c9d8dfd2880ff5913db0f85->leave($__internal_095aed0cef7277a5ab5568ae4470b0a4668c36828c9d8dfd2880ff5913db0f85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3e4f17e2827397c3745cb4f7c6e0015948538655d367c71747819e1d149d0e = $this->env->getExtension("native_profiler");
        $__internal_cd3e4f17e2827397c3745cb4f7c6e0015948538655d367c71747819e1d149d0e->enter($__internal_cd3e4f17e2827397c3745cb4f7c6e0015948538655d367c71747819e1d149d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd3e4f17e2827397c3745cb4f7c6e0015948538655d367c71747819e1d149d0e->leave($__internal_cd3e4f17e2827397c3745cb4f7c6e0015948538655d367c71747819e1d149d0e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b91391b5c4e766d81780f2e69050b78eadaa945080de4332332d9a0a2220c19 = $this->env->getExtension("native_profiler");
        $__internal_0b91391b5c4e766d81780f2e69050b78eadaa945080de4332332d9a0a2220c19->enter($__internal_0b91391b5c4e766d81780f2e69050b78eadaa945080de4332332d9a0a2220c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b91391b5c4e766d81780f2e69050b78eadaa945080de4332332d9a0a2220c19->leave($__internal_0b91391b5c4e766d81780f2e69050b78eadaa945080de4332332d9a0a2220c19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
