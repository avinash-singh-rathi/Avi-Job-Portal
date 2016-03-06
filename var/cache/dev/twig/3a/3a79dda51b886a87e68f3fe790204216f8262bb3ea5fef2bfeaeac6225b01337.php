<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_88749d73b43e98fd002ddbb501c7bd40571a34adf26dd43a89372bd21b7f4bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a9909330672664b3caf52a13b7e8e1695da36ccb3b507f2f7d044d978ebfb11f = $this->env->getExtension("native_profiler");
        $__internal_a9909330672664b3caf52a13b7e8e1695da36ccb3b507f2f7d044d978ebfb11f->enter($__internal_a9909330672664b3caf52a13b7e8e1695da36ccb3b507f2f7d044d978ebfb11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9909330672664b3caf52a13b7e8e1695da36ccb3b507f2f7d044d978ebfb11f->leave($__internal_a9909330672664b3caf52a13b7e8e1695da36ccb3b507f2f7d044d978ebfb11f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f737ec30a9b3a114a33c1491353f596f1ceec124a42fef16ca111b63ffae954c = $this->env->getExtension("native_profiler");
        $__internal_f737ec30a9b3a114a33c1491353f596f1ceec124a42fef16ca111b63ffae954c->enter($__internal_f737ec30a9b3a114a33c1491353f596f1ceec124a42fef16ca111b63ffae954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f737ec30a9b3a114a33c1491353f596f1ceec124a42fef16ca111b63ffae954c->leave($__internal_f737ec30a9b3a114a33c1491353f596f1ceec124a42fef16ca111b63ffae954c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
