<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_84cb888206bb55d62eca99389d9e46c9c4253defd7d10f952cf481cf3724bfa9 extends Twig_Template
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
        $__internal_9ad9def4943d8d581d977c995b3c8d98aa2fa02c23280181d74e19bede31583a = $this->env->getExtension("native_profiler");
        $__internal_9ad9def4943d8d581d977c995b3c8d98aa2fa02c23280181d74e19bede31583a->enter($__internal_9ad9def4943d8d581d977c995b3c8d98aa2fa02c23280181d74e19bede31583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9ad9def4943d8d581d977c995b3c8d98aa2fa02c23280181d74e19bede31583a->leave($__internal_9ad9def4943d8d581d977c995b3c8d98aa2fa02c23280181d74e19bede31583a_prof);

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
