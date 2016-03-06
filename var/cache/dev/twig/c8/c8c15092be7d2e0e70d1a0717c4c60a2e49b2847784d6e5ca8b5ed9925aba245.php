<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_db715cfc172c3d1e77d2ce0a27fb3164252d0c8602456bd36acbc54076a42643 extends Twig_Template
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
        $__internal_392f02a53cad1ff91d18c6776d3fde225534749a9869dc63831ea6798cb80332 = $this->env->getExtension("native_profiler");
        $__internal_392f02a53cad1ff91d18c6776d3fde225534749a9869dc63831ea6798cb80332->enter($__internal_392f02a53cad1ff91d18c6776d3fde225534749a9869dc63831ea6798cb80332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_392f02a53cad1ff91d18c6776d3fde225534749a9869dc63831ea6798cb80332->leave($__internal_392f02a53cad1ff91d18c6776d3fde225534749a9869dc63831ea6798cb80332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
