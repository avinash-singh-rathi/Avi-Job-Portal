<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_64fc4b27ab8a7961d8811d455d8c96dcfb5080e45d4b9144160caa88ad191951 extends Twig_Template
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
        $__internal_139f3dd1b85ef5893d9b2213960643a45203c2dea486fcb6c974336bf5d1cc45 = $this->env->getExtension("native_profiler");
        $__internal_139f3dd1b85ef5893d9b2213960643a45203c2dea486fcb6c974336bf5d1cc45->enter($__internal_139f3dd1b85ef5893d9b2213960643a45203c2dea486fcb6c974336bf5d1cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_139f3dd1b85ef5893d9b2213960643a45203c2dea486fcb6c974336bf5d1cc45->leave($__internal_139f3dd1b85ef5893d9b2213960643a45203c2dea486fcb6c974336bf5d1cc45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
