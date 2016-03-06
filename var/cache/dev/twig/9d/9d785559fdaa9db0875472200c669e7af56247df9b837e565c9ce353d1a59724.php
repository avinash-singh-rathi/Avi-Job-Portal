<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_347632104f15cbe3fc4259bc9e89d6b30adfa5800df2cd46bfce42d252be4a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa927278505e347f6cf455d9f1c16c88e549b7e56e59473129349a6b92a94d68 = $this->env->getExtension("native_profiler");
        $__internal_fa927278505e347f6cf455d9f1c16c88e549b7e56e59473129349a6b92a94d68->enter($__internal_fa927278505e347f6cf455d9f1c16c88e549b7e56e59473129349a6b92a94d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa927278505e347f6cf455d9f1c16c88e549b7e56e59473129349a6b92a94d68->leave($__internal_fa927278505e347f6cf455d9f1c16c88e549b7e56e59473129349a6b92a94d68_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d82083a0f779b71ffa2db21ada3b8fd386d90b854f964629c6bfb88670a6eda = $this->env->getExtension("native_profiler");
        $__internal_5d82083a0f779b71ffa2db21ada3b8fd386d90b854f964629c6bfb88670a6eda->enter($__internal_5d82083a0f779b71ffa2db21ada3b8fd386d90b854f964629c6bfb88670a6eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5d82083a0f779b71ffa2db21ada3b8fd386d90b854f964629c6bfb88670a6eda->leave($__internal_5d82083a0f779b71ffa2db21ada3b8fd386d90b854f964629c6bfb88670a6eda_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
