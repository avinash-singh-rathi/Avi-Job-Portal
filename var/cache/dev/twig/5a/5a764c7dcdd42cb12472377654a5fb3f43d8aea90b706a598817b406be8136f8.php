<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8440c8dece3b78c242efcbcb18859f6d3a4ce26597a00cb3db1e4b101630d50c extends Twig_Template
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
        $__internal_312d57b83c83030e179c0620c1a1507125983e558307836cc49b9067765753cf = $this->env->getExtension("native_profiler");
        $__internal_312d57b83c83030e179c0620c1a1507125983e558307836cc49b9067765753cf->enter($__internal_312d57b83c83030e179c0620c1a1507125983e558307836cc49b9067765753cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_312d57b83c83030e179c0620c1a1507125983e558307836cc49b9067765753cf->leave($__internal_312d57b83c83030e179c0620c1a1507125983e558307836cc49b9067765753cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
