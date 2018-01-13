<?php

/* :neopolitan:base.html.twig */
class __TwigTemplate_b023202ebe486a31ee9051d95d67a114567a4a6cf16426f3dff11c265330bae4 extends Twig_Template
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
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/css/neopolitan.css"));
        echo "\" type=\"text/css\" />
    </head>
    <body style=\"padding: 0;margin: 0;display: block;background: #ffffff;-webkit-text-size-adjust: none;-webkit-font-smoothing: antialiased;width: 100%;height: 100%;color: #37302d;font-size: 16px;\" bgcolor=\"#ffffff\">
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
        return ":neopolitan:base.html.twig";
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
        return new Twig_Source("", ":neopolitan:base.html.twig", "/var/www/html/mautic/themes/neopolitan/html/base.html.twig");
    }
}
