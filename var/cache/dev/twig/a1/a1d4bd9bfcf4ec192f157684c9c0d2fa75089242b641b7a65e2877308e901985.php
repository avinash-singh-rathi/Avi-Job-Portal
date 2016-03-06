<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6c6806df419c40ec9361b6f1f6b2985cbb8af3953ad533d6bef6d5c6e0ebfa9e extends Twig_Template
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
        $__internal_c81d54df0c9b614b3e4ed590b802c517c829e2690e35576a578795921ccd89c3 = $this->env->getExtension("native_profiler");
        $__internal_c81d54df0c9b614b3e4ed590b802c517c829e2690e35576a578795921ccd89c3->enter($__internal_c81d54df0c9b614b3e4ed590b802c517c829e2690e35576a578795921ccd89c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c81d54df0c9b614b3e4ed590b802c517c829e2690e35576a578795921ccd89c3->leave($__internal_c81d54df0c9b614b3e4ed590b802c517c829e2690e35576a578795921ccd89c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
