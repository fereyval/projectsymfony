<?php

/* TestGeneralBundle:Default:succes.html.twig */
class __TwigTemplate_72befbd65d8d01b7833bec2de08971498a384ccb1585707f17f1c1e627de8921 extends Twig_Template
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
        $__internal_183b7aee19992c6873d971f8dfcd31722604afe267ea610891741b3e6dd7e28d = $this->env->getExtension("native_profiler");
        $__internal_183b7aee19992c6873d971f8dfcd31722604afe267ea610891741b3e6dd7e28d->enter($__internal_183b7aee19992c6873d971f8dfcd31722604afe267ea610891741b3e6dd7e28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestGeneralBundle:Default:succes.html.twig"));

        // line 1
        echo "<img src=\"http://www.gif-maniac.com/gifs/52/52054.gif\" />
<br>
<p>Votre Demande de devis est faite</p>
<p><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("test_general_homepage");
        echo "\"><< Cliquez ici pour revenir à l'accueil >></a></p>";
        
        $__internal_183b7aee19992c6873d971f8dfcd31722604afe267ea610891741b3e6dd7e28d->leave($__internal_183b7aee19992c6873d971f8dfcd31722604afe267ea610891741b3e6dd7e28d_prof);

    }

    public function getTemplateName()
    {
        return "TestGeneralBundle:Default:succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <img src="http://www.gif-maniac.com/gifs/52/52054.gif" />*/
/* <br>*/
/* <p>Votre Demande de devis est faite</p>*/
/* <p><a href="{{ path('test_general_homepage') }}"><< Cliquez ici pour revenir à l'accueil >></a></p>*/
