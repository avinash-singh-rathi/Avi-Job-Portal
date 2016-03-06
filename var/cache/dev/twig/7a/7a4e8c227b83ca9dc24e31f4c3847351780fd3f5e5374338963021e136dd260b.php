<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba061150d1e47734a3dc795b7060066d1344fd7d0b84d4d7a3afe2c7c8d06639 extends Twig_Template
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
        $__internal_42d9149df74e22746fa61e6c4096899a8d563d00afba23bb85c41dec4f0109c4 = $this->env->getExtension("native_profiler");
        $__internal_42d9149df74e22746fa61e6c4096899a8d563d00afba23bb85c41dec4f0109c4->enter($__internal_42d9149df74e22746fa61e6c4096899a8d563d00afba23bb85c41dec4f0109c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42d9149df74e22746fa61e6c4096899a8d563d00afba23bb85c41dec4f0109c4->leave($__internal_42d9149df74e22746fa61e6c4096899a8d563d00afba23bb85c41dec4f0109c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
