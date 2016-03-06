<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_86047cab824793d0a996462802bb94e4aeb54fe5cc470752924cddd2ac1afd8e extends Twig_Template
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
        $__internal_0bf03700831b5ba5765424a7d54038904c9a99b4ee613d213853b606016e09ab = $this->env->getExtension("native_profiler");
        $__internal_0bf03700831b5ba5765424a7d54038904c9a99b4ee613d213853b606016e09ab->enter($__internal_0bf03700831b5ba5765424a7d54038904c9a99b4ee613d213853b606016e09ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0bf03700831b5ba5765424a7d54038904c9a99b4ee613d213853b606016e09ab->leave($__internal_0bf03700831b5ba5765424a7d54038904c9a99b4ee613d213853b606016e09ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
