<?php

/* :blank:base.html.twig */
class __TwigTemplate_0e12b776c0e08b1562c5d94f0b26ec11bc264de70b3c2322c8fd07bb15119e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        if (array_key_exists("page", $context)) {
            // line 5
            echo "        <title>{pagetitle}</title>
            <meta name=\"description\" content=\"{pagemetadescription}\">
            ";
        }
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "            ";
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputHeadDeclarations();
        echo "
    </head>
    <body>
        ";
        // line 12
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputScripts("bodyOpen");
        echo "
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        ";
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputScripts("bodyClose");
        echo "
    </body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":blank:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 8,  49 => 14,  47 => 13,  43 => 12,  36 => 9,  33 => 8,  28 => 5,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":blank:base.html.twig", "/var/www/html/mautic/themes/blank/html/base.html.twig");
    }
}
