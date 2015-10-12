<?php

/* base.html.twig */
class __TwigTemplate_4042169d774784f56ffc054fa36063f54ad9f3c686937133d5b399528fb58b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - DegustCo</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/knacss.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
        <footer class=\"footer container-fluid\">
            <div class=\"container\">
                <div class=\"row footer_content\">
                    <div class=\"col-sm-4 footer_content_col\">
                        <div class=\"footer_content_col_inner\">
                            <h5>DEGUST&amp;CO</h5>
                            <ul>
                                <li><a href=\"#\" title=\"Qui sommes-nous ?\">Qui sommes-nous ?</a></li>
                                <li><a href=\"#\" title=\"Rejoindre l&#039;équipe\">Rejoindre l&#039;équipe</a></li>
                                <li><a href=\"#\" title=\"Voir tous les animateurs\">Voir tous les animateurs</a></li>
                                <li><a href=\"#\" title=\"Mentions légales &amp; CGU\">Mentions légales &amp; CGU</a></li>
                                <li><a href=\"#\" title=\"Politique de cookies\">Politique de cookies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4 footer_content_col\">
                        <div class=\"footer_content_col_inner\">
                            <h5>ESPACE PRO</h5>
                            <ul>
                                <li><a href=\"#\" title=\"Rejoindre la communauté des animateurs\">Intégrer le réseau d&#039;animateurs</a></li>
                                <li><a target=\"_blank\" href=\"#\" title=\"Mon interface en ligne\">Mon interface en ligne</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4 footer_content_col\">
                        <div class=\"footer_content_col_inner\">
                            <h5>L&#039;AVENTURE</h5>
                            <ul>
                                <li><a href=\"#\" class=\"open_popin\" id=\"NL_trigger\" data-target=\"NL_popin\" title=\"Newletter\">Newsletter</a></li>
                                <li><a href=\"http://blog.degustandco.com/\" target=\"_blank\" title=\"Blog\">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                
                <div class=\"row footer_content\">
                    <div class=\"col-sm-7 footer_content_col\">
                        <a href=\"tel:+33975181014\"><i class=\"fa fa-phone prs\"></i>09 75 18 10 14</a>&nbsp;&nbsp;
                        <a href=\"mailto:contact@degustandco.com\"><i class=\"fa fa-envelope-o prs pls\"></i>contact@degustandco.com</a>
                    </div>
                </div>
            </div>
            <!-- FOOTER BOTTOM -->
            <div class=\"footer_bottom text-center row\">
                <span class=\"footer_bottom_content col-sm-12\">Degust&amp;Co - Fait à Lyon avec goût ! L’abus d’alcool est dangereux pour la santé - A consommer avec modération.</span>
            </div>
        </footer>

        ";
        // line 69
        $this->displayBlock('javascript', $context, $blocks);
        // line 70
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/parallax.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$('.bxslider').bxSlider();
            });
        </script>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::header.html.twig", "base.html.twig", 17)->display($context);
        echo " ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 69
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 69,  162 => 18,  154 => 17,  149 => 12,  144 => 5,  132 => 73,  128 => 72,  124 => 71,  121 => 70,  119 => 69,  67 => 19,  64 => 18,  62 => 17,  54 => 13,  52 => 12,  48 => 11,  44 => 10,  39 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE hmtl>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %} - DegustCo</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/knacss.css') }}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" />*/
/*         <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" />*/
/*         {% block stylesheet %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% block nav %} {% include '::header.html.twig' %} {% endblock %}*/
/*         {% block body %}  {% endblock %}*/
/* */
/*         <footer class="footer container-fluid">*/
/*             <div class="container">*/
/*                 <div class="row footer_content">*/
/*                     <div class="col-sm-4 footer_content_col">*/
/*                         <div class="footer_content_col_inner">*/
/*                             <h5>DEGUST&amp;CO</h5>*/
/*                             <ul>*/
/*                                 <li><a href="#" title="Qui sommes-nous ?">Qui sommes-nous ?</a></li>*/
/*                                 <li><a href="#" title="Rejoindre l&#039;équipe">Rejoindre l&#039;équipe</a></li>*/
/*                                 <li><a href="#" title="Voir tous les animateurs">Voir tous les animateurs</a></li>*/
/*                                 <li><a href="#" title="Mentions légales &amp; CGU">Mentions légales &amp; CGU</a></li>*/
/*                                 <li><a href="#" title="Politique de cookies">Politique de cookies</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-4 footer_content_col">*/
/*                         <div class="footer_content_col_inner">*/
/*                             <h5>ESPACE PRO</h5>*/
/*                             <ul>*/
/*                                 <li><a href="#" title="Rejoindre la communauté des animateurs">Intégrer le réseau d&#039;animateurs</a></li>*/
/*                                 <li><a target="_blank" href="#" title="Mon interface en ligne">Mon interface en ligne</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-4 footer_content_col">*/
/*                         <div class="footer_content_col_inner">*/
/*                             <h5>L&#039;AVENTURE</h5>*/
/*                             <ul>*/
/*                                 <li><a href="#" class="open_popin" id="NL_trigger" data-target="NL_popin" title="Newletter">Newsletter</a></li>*/
/*                                 <li><a href="http://blog.degustandco.com/" target="_blank" title="Blog">Blog</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 */
/*                 <div class="row footer_content">*/
/*                     <div class="col-sm-7 footer_content_col">*/
/*                         <a href="tel:+33975181014"><i class="fa fa-phone prs"></i>09 75 18 10 14</a>&nbsp;&nbsp;*/
/*                         <a href="mailto:contact@degustandco.com"><i class="fa fa-envelope-o prs pls"></i>contact@degustandco.com</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- FOOTER BOTTOM -->*/
/*             <div class="footer_bottom text-center row">*/
/*                 <span class="footer_bottom_content col-sm-12">Degust&amp;Co - Fait à Lyon avec goût ! L’abus d’alcool est dangereux pour la santé - A consommer avec modération.</span>*/
/*             </div>*/
/*         </footer>*/
/* */
/*         {% block javascript %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('js/parallax.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.bxslider.js') }}"></script>*/
/*                 <script type="text/javascript">*/
/*             $(document).ready(function(){*/
/*                 $('.bxslider').bxSlider();*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
