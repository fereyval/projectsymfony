<?php

/* ::nav.html.twig */
class __TwigTemplate_8c5113fbc9e2fbbf578743af1f8fe1ce483c96bfbd306d60b284cbc9caf10782 extends Twig_Template
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
        $__internal_c367a46ab49e4268e2ef3be8512d73253966d3022655f2321952abe9821360cf = $this->env->getExtension("native_profiler");
        $__internal_c367a46ab49e4268e2ef3be8512d73253966d3022655f2321952abe9821360cf->enter($__internal_c367a46ab49e4268e2ef3be8512d73253966d3022655f2321952abe9821360cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<header role=\"banner\" class=\"header line pam mbs\">
    <div class=\"header-logo\"><a href=\"#\" title=\"Retour à la page d'accueil\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
    <p class=\"header-slogan\">Degust&Co</p>
</header><!-- Fin header //-->
<div class=\"conteneur center\">
</div>";
        
        $__internal_c367a46ab49e4268e2ef3be8512d73253966d3022655f2321952abe9821360cf->leave($__internal_c367a46ab49e4268e2ef3be8512d73253966d3022655f2321952abe9821360cf_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
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
/*     <div class="header-logo"><a href="#" title="Retour à la page d'accueil"><img src="{{ asset('img/logo.png') }}" alt="logo"></a></div>*/
/*     <p class="header-slogan">Degust&Co</p>*/
/* </header><!-- Fin header //-->*/
/* <div class="conteneur center">*/
/* </div>*/
