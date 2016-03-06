<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_608de3e16e8ad8d6dad54bcb230eaa4a8f277b30f33165d025030035d78d586f extends Twig_Template
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
        $__internal_8d949b399faf02e7c97acb39ce67591dfacc97907138ca17bd0d36d7183ba1d6 = $this->env->getExtension("native_profiler");
        $__internal_8d949b399faf02e7c97acb39ce67591dfacc97907138ca17bd0d36d7183ba1d6->enter($__internal_8d949b399faf02e7c97acb39ce67591dfacc97907138ca17bd0d36d7183ba1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8d949b399faf02e7c97acb39ce67591dfacc97907138ca17bd0d36d7183ba1d6->leave($__internal_8d949b399faf02e7c97acb39ce67591dfacc97907138ca17bd0d36d7183ba1d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
