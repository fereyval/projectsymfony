<?php

/* ::header.html.twig */
class __TwigTemplate_4db1d065e828c5bc89db6bcdeae999e8778bf9f9c8a223de3f042a5ee8e9e189 extends Twig_Template
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
        $__internal_464f65d5f075711c24808dd43f8328dad299289da46880cb1c85ad1e888ddc17 = $this->env->getExtension("native_profiler");
        $__internal_464f65d5f075711c24808dd43f8328dad299289da46880cb1c85ad1e888ddc17->enter($__internal_464f65d5f075711c24808dd43f8328dad299289da46880cb1c85ad1e888ddc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        
        $__internal_464f65d5f075711c24808dd43f8328dad299289da46880cb1c85ad1e888ddc17->leave($__internal_464f65d5f075711c24808dd43f8328dad299289da46880cb1c85ad1e888ddc17_prof);

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
