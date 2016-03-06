<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0dc512bcd4060904d13a234ab6877c9ea94d208f1460d8e6b4823f8271b0b4b6 extends Twig_Template
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
        $__internal_5a2c510cd5d8cced3184dfb6860701b264968f682bbb9917acc6d3fc65db3343 = $this->env->getExtension("native_profiler");
        $__internal_5a2c510cd5d8cced3184dfb6860701b264968f682bbb9917acc6d3fc65db3343->enter($__internal_5a2c510cd5d8cced3184dfb6860701b264968f682bbb9917acc6d3fc65db3343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5a2c510cd5d8cced3184dfb6860701b264968f682bbb9917acc6d3fc65db3343->leave($__internal_5a2c510cd5d8cced3184dfb6860701b264968f682bbb9917acc6d3fc65db3343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
