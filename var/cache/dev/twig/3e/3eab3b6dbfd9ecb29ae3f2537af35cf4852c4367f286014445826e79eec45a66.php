<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d91f39e36c75fa1998949ad54583ec96c99d8b2ce1051f981b7d4e82fb4ef3a0 extends Twig_Template
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
        $__internal_5d7a84a921f0cce3e6c42f41d43512d9a24f5edb1373d16f664ebd4a59c63851 = $this->env->getExtension("native_profiler");
        $__internal_5d7a84a921f0cce3e6c42f41d43512d9a24f5edb1373d16f664ebd4a59c63851->enter($__internal_5d7a84a921f0cce3e6c42f41d43512d9a24f5edb1373d16f664ebd4a59c63851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5d7a84a921f0cce3e6c42f41d43512d9a24f5edb1373d16f664ebd4a59c63851->leave($__internal_5d7a84a921f0cce3e6c42f41d43512d9a24f5edb1373d16f664ebd4a59c63851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
