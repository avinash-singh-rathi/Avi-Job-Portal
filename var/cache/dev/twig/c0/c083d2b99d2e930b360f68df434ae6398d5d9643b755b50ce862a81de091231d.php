<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_11b4dec5f06272dc27da40a4bcf30b9ce397ef48cdf777ec60e95de8e350c898 extends Twig_Template
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
        $__internal_a0b81f6da6fd9dfc6dc4572b58f1221a1750cbb1bd1b3067199e676dd4722408 = $this->env->getExtension("native_profiler");
        $__internal_a0b81f6da6fd9dfc6dc4572b58f1221a1750cbb1bd1b3067199e676dd4722408->enter($__internal_a0b81f6da6fd9dfc6dc4572b58f1221a1750cbb1bd1b3067199e676dd4722408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a0b81f6da6fd9dfc6dc4572b58f1221a1750cbb1bd1b3067199e676dd4722408->leave($__internal_a0b81f6da6fd9dfc6dc4572b58f1221a1750cbb1bd1b3067199e676dd4722408_prof);

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
