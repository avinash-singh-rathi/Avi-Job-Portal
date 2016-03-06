<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b7f98077101d72532b95765273b21762550e58c59b4067cb33909174c6417e03 extends Twig_Template
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
        $__internal_895fa63b4f20ca31d8e41492aa88b00b5af7ed8aba7143c371d038cdf921e800 = $this->env->getExtension("native_profiler");
        $__internal_895fa63b4f20ca31d8e41492aa88b00b5af7ed8aba7143c371d038cdf921e800->enter($__internal_895fa63b4f20ca31d8e41492aa88b00b5af7ed8aba7143c371d038cdf921e800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_895fa63b4f20ca31d8e41492aa88b00b5af7ed8aba7143c371d038cdf921e800->leave($__internal_895fa63b4f20ca31d8e41492aa88b00b5af7ed8aba7143c371d038cdf921e800_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
