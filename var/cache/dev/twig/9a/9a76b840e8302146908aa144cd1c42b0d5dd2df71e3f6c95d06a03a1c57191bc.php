<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_28f919835d8d9a766b113a7e4c98b4776827dec8147c0f203f4d778187639600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b3b96ba3e30288e18da6df161ae82c42e8dac13546cf2719fafce49bb93d4cf = $this->env->getExtension("native_profiler");
        $__internal_1b3b96ba3e30288e18da6df161ae82c42e8dac13546cf2719fafce49bb93d4cf->enter($__internal_1b3b96ba3e30288e18da6df161ae82c42e8dac13546cf2719fafce49bb93d4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1b3b96ba3e30288e18da6df161ae82c42e8dac13546cf2719fafce49bb93d4cf->leave($__internal_1b3b96ba3e30288e18da6df161ae82c42e8dac13546cf2719fafce49bb93d4cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
