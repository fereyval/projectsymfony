<?php

/* ::header.html.twig */
class __TwigTemplate_0a0c2ea0f0858b5ff86f0cf80d90d7608b4c3e50981e06e0a384aada7fb6b522 extends Twig_Template
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
        $__internal_6fd65f5533f67a4a2d85be86c95cc408c754829b30bb62e3fd64c35fbae1ebbc = $this->env->getExtension("native_profiler");
        $__internal_6fd65f5533f67a4a2d85be86c95cc408c754829b30bb62e3fd64c35fbae1ebbc->enter($__internal_6fd65f5533f67a4a2d85be86c95cc408c754829b30bb62e3fd64c35fbae1ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<header role=\"banner\" class=\"header line pam mbs\">
    <div class=\"header-logo\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("test_general_homepage");
        echo "\" title=\"Retour à la page d'accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
</header><!-- Fin header //-->

";
        
        $__internal_6fd65f5533f67a4a2d85be86c95cc408c754829b30bb62e3fd64c35fbae1ebbc->leave($__internal_6fd65f5533f67a4a2d85be86c95cc408c754829b30bb62e3fd64c35fbae1ebbc_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <header role="banner" class="header line pam mbs">*/
/*     <div class="header-logo"><a href="{{ path('test_general_homepage') }}" title="Retour à la page d'accueil"><img src="{{ asset('img/logo.png') }}" alt="logo"></a></div>*/
/* </header><!-- Fin header //-->*/
/* */
/* */
