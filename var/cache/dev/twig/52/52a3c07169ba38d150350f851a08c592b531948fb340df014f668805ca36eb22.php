<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e64de461436d1c6bc428b7d371a2ea9018148063ebe7e9d5e7ffd61b1d26eddf extends Twig_Template
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
        $__internal_9ae638ef49cf80091ac6bc2db22e9ce9cb91e14cf49699544589614b73ac4401 = $this->env->getExtension("native_profiler");
        $__internal_9ae638ef49cf80091ac6bc2db22e9ce9cb91e14cf49699544589614b73ac4401->enter($__internal_9ae638ef49cf80091ac6bc2db22e9ce9cb91e14cf49699544589614b73ac4401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9ae638ef49cf80091ac6bc2db22e9ce9cb91e14cf49699544589614b73ac4401->leave($__internal_9ae638ef49cf80091ac6bc2db22e9ce9cb91e14cf49699544589614b73ac4401_prof);

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
