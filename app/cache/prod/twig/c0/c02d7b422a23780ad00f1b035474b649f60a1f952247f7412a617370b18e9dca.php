<?php

/* :goldstar:base.html.twig */
class __TwigTemplate_e8c8fcc586eaa193c09668cb8cfbc239e9326cbf95e819b8c87fc39794e01454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        echo "        <link rel=\"stylesheet\"href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/css/goldstar.css"));
        echo "\" type=\"text/css\" />
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
</html>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":goldstar:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  47 => 14,  45 => 13,  41 => 12,  35 => 9,  32 => 8,  27 => 5,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":goldstar:base.html.twig", "/var/www/html/mautic/themes/goldstar/html/base.html.twig");
    }
}
