<?php

/* :blank:email.html.twig */
class __TwigTemplate_a2e5d780ef6ff0d7014524fcff983bc7cb3ff440030b8b58b515171e11ef631f extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>{subject}</title>
        <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
            /* Mobile styles */
            @media only screen and (max-width: 480px) {

                [class=\"w320\"] {
                    width: 320px !important;
                }

                [class=\"mobile-block\"] {
                    width: 100% !important;
                    display: block !important;
                }
            }
        </style>
    </head>
    <body style=\"margin:0\">
        <div data-section-wrapper=\"1\">
            <center>
                <table data-section=\"1\" style=\"width: 600;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\">
                    <tbody>
                        <tr>
                            <td>
                                <div data-slot-container=\"1\" style=\"min-height: 30px\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <h2>Hello there!</h2>
                                        <br>
                                        We haven't heard from you for a while...
                                        <br>
                                        <br>
                                        {unsubscribe_text} | {webview_text}
                                        <br>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return ":blank:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":blank:email.html.twig", "/var/www/html/mautic/themes/blank/html/email.html.twig");
    }
}
