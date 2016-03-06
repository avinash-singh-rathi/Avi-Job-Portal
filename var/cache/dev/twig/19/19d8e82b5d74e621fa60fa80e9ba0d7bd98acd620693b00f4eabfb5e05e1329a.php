<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bce2406b5cfb209e7af4cee2a71351b6b83a8a838e0d17f90ec5c4ccab96c102 extends Twig_Template
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
        $__internal_0c157180d1fef7ca7d27843ec670625fdfadb15b432a5f12c083f16cf452d5e5 = $this->env->getExtension("native_profiler");
        $__internal_0c157180d1fef7ca7d27843ec670625fdfadb15b432a5f12c083f16cf452d5e5->enter($__internal_0c157180d1fef7ca7d27843ec670625fdfadb15b432a5f12c083f16cf452d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0c157180d1fef7ca7d27843ec670625fdfadb15b432a5f12c083f16cf452d5e5->leave($__internal_0c157180d1fef7ca7d27843ec670625fdfadb15b432a5f12c083f16cf452d5e5_prof);

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
