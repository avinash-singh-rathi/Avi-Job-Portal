<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3ce3d59b364a33b97f4e4c44d073e325f2e090456a26ca5d3fe5fa337c13cb30 extends Twig_Template
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
        $__internal_9f1c6ed04572d560e6e79ab428bd254904b6547d26ca3b1f8c57ee55c98eeb3f = $this->env->getExtension("native_profiler");
        $__internal_9f1c6ed04572d560e6e79ab428bd254904b6547d26ca3b1f8c57ee55c98eeb3f->enter($__internal_9f1c6ed04572d560e6e79ab428bd254904b6547d26ca3b1f8c57ee55c98eeb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9f1c6ed04572d560e6e79ab428bd254904b6547d26ca3b1f8c57ee55c98eeb3f->leave($__internal_9f1c6ed04572d560e6e79ab428bd254904b6547d26ca3b1f8c57ee55c98eeb3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
