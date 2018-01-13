<?php

/* :coffee:base.html.twig */
class __TwigTemplate_a10cb2487b608cf68c95bb9d001b78fc158607e4f77517c4afab056e852d1e11 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        if (array_key_exists("page", $context)) {
            // line 6
            echo "            <title>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "getTitle", array(), "method"), "html", null, true);
            echo "</title>
            <meta name=\"description\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metaDescription", array()), "html", null, true);
            echo "\" />
        ";
        }
        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl("themes/coffee/css/coffee.css");
        echo "\" type=\"text/css\" />
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
        ";
        // line 14
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputHeadDeclarations();
        echo "
    </head>
    <body>
        ";
        // line 17
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputScripts("bodyOpen");
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->outputScripts("bodyClose");
        echo "
    </body>
</html>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":coffee:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  60 => 19,  58 => 18,  54 => 17,  48 => 14,  42 => 11,  38 => 9,  33 => 7,  28 => 6,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":coffee:base.html.twig", "/var/www/html/mautic/themes/coffee/html/base.html.twig");
    }
}
