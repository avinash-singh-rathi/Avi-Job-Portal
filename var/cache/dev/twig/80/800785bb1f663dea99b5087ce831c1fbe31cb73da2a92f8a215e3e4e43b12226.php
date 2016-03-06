<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cf1f9fcdd69f3432df39e226e4f26f81bbc04b007ccb2a68f02f32a78c3de878 extends Twig_Template
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
        $__internal_77e4b99ddb5d9bce87403854a97286b1a6d8827cfa581e3e9738ce63947905de = $this->env->getExtension("native_profiler");
        $__internal_77e4b99ddb5d9bce87403854a97286b1a6d8827cfa581e3e9738ce63947905de->enter($__internal_77e4b99ddb5d9bce87403854a97286b1a6d8827cfa581e3e9738ce63947905de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_77e4b99ddb5d9bce87403854a97286b1a6d8827cfa581e3e9738ce63947905de->leave($__internal_77e4b99ddb5d9bce87403854a97286b1a6d8827cfa581e3e9738ce63947905de_prof);

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
