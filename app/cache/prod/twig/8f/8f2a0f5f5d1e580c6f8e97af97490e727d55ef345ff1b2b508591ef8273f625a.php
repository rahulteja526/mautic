<?php

/* :skyline:page.html.twig */
class __TwigTemplate_c5a9fe9ad8111e9518360495c994c81715a7cb82e6388d5ed35cc1606abd743e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . (isset($context["template"]) ? $context["template"] : null)) . ":base.html.twig"), ":skyline:page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div data-section-wrapper=\"1\" style=\"border-bottom: 3px solid #3bcdc3;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td valign=\"top\" style=\"text-align:left;\" class=\"mobile-center\" data-slot-container=\"1\">
                        <div data-slot=\"image\">
                            <img width=\"250\" height=\"62\" src=\"";
        // line 10
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/logo.gif"), null, null, true);
        echo "\">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\"  background=\"";
        // line 17
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/bg.gif"), null, null, true);
        echo "\" bgcolor=\"#64594b\" valign=\"top\" style=\"background: url(";
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/bg.gif"), null, null, true);
        echo ") no-repeat center; background-color: #64594b; background-position: center;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" height=\"303\" class=\"w320\">
                <tr>
                    <td valign=\"middle\" style=\"vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:left;\" class=\"mobile-center\" height=\"303\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h1 style=\"color: #ffffff\">WE REALLY MISS YOU!</h1><br>
                            <h2 style=\"color: #ffffff\">Like.. really, really! Please give us another chance.</h2>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"30\" width=\"530\" class=\"w290\">
                <tr>
                    <td valign=\"top\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h3 style=\"text-align:center;\">Enjoy 50% of your next purchase!</h3>
                            <br>

                            <table style=\"margin: 0 auto;\" cellspacing=\"0\" cellpadding=\"8\" width=\"250\">
                                <tr>
                                    <td style=\"border: 1px solid #a1a1a1; text-align:center;\">
                                        Coupon Code: <span style=\"font-family: Courier;\">4562789498</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"8\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                            <tr>
                                <td class=\"mobile-padding\" style=\"text-align:left;\" data-slot-container=\"1\">
                                    <div data-slot=\"separator\"><hr/></div>
                                    <div data-slot=\"text\">
                                        <br>
                                        We know it's only been a few months but since you've been gone, we've received a ton of amazing new products that we think you might like.
                                        <br><br>
                                        We hope you will give us another chance and come have look.
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class=\"mobile-padding\" data-slot-container=\"1\">
                        <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"Come back!\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#3bcdc3\" data-param-color=\"ffffff\">
                            <a href=\"#\" target=\"_blank\" style=\"font-family:'Lato', Helvetica, Arial, sans-serif;font-weight:bold;font-size: 13px; color: #ffffff; text-decoration: none; text-decoration: none; padding: 12px 40px; background-color: #3bcdc3; display: inline-block;\">
                                Come back!
                            </a>
                            <div style=\"clear:both\"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"25\" width=\"100%\">
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\" style=\"background-color:#c2c2c2;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"30\" width=\"100%\">
                            <tr>
                                <td style=\"text-align:center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 105
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/twitter.gif"), null, null, true);
        echo "\" alt=\"twitter\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 108
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/gplus.gif"), null, null, true);
        echo "\" alt=\"google plus\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 111
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/facebook.gif"), null, null, true);
        echo "\" alt=\"facebook\" />
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <table style=\"margin:0 auto;\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">
                                <tr>
                                    <td style=\"text-align:center; margin:0 auto;\" width=\"100%\" data-slot-container=\"1\">
                                        <div data-slot=\"image\">
                                            <a href=\"#\" style=\"text-align:center;\">
                                                <img style=\"margin:0 auto;\" width=\"123\" height=\"24\" src=\"";
        // line 127
        echo $this->env->getExtension('Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension')->getAssetUrl((("themes/" . (isset($context["template"]) ? $context["template"] : null)) . "/img/logo-footer.gif"), null, null, true);
        echo "\" alt=\"logo link\" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":skyline:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 127,  153 => 111,  147 => 108,  141 => 105,  48 => 17,  38 => 10,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":skyline:page.html.twig", "/var/www/html/mautic/themes/skyline/html/page.html.twig");
    }
}
