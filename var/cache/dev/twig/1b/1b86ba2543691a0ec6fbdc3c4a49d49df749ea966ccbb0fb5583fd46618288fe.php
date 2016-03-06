<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_94bb74dfd6c4328422b1b2ce7db093f980d38f10335f2251e352e660c3b19f06 extends Twig_Template
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
        $__internal_76f39b57746f1f007e566eef132f995deb13e7e837c813147d2d0172f770e4f2 = $this->env->getExtension("native_profiler");
        $__internal_76f39b57746f1f007e566eef132f995deb13e7e837c813147d2d0172f770e4f2->enter($__internal_76f39b57746f1f007e566eef132f995deb13e7e837c813147d2d0172f770e4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_76f39b57746f1f007e566eef132f995deb13e7e837c813147d2d0172f770e4f2->leave($__internal_76f39b57746f1f007e566eef132f995deb13e7e837c813147d2d0172f770e4f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
