<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_587d53556ccbce42570a2c9f6f49fcefa96debab3a336a4fb187b50e959fb018 extends Twig_Template
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
        $__internal_94e0813c2dde6c31e6c53f39403201b9733c430d5a77593d285d78c4d0394ea9 = $this->env->getExtension("native_profiler");
        $__internal_94e0813c2dde6c31e6c53f39403201b9733c430d5a77593d285d78c4d0394ea9->enter($__internal_94e0813c2dde6c31e6c53f39403201b9733c430d5a77593d285d78c4d0394ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_94e0813c2dde6c31e6c53f39403201b9733c430d5a77593d285d78c4d0394ea9->leave($__internal_94e0813c2dde6c31e6c53f39403201b9733c430d5a77593d285d78c4d0394ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
