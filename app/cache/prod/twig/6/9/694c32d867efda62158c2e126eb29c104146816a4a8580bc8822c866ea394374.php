<?php

/* ::header.html.twig */
class __TwigTemplate_a2c312d8eb0c8678eda76a7bfd65959a012009ec0092ed519d22fca534c6b55c extends Twig_Template
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
        echo "<header role=\"banner\" class=\"header line pam mbs\">
    <div class=\"header-logo\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("test_general_homepage");
        echo "\" title=\"Retour à la page d'accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
</header><!-- Fin header //-->

";
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
        return array (  22 => 2,  19 => 1,);
    }
}
/* <header role="banner" class="header line pam mbs">*/
/*     <div class="header-logo"><a href="{{ path('test_general_homepage') }}" title="Retour à la page d'accueil"><img src="{{ asset('img/logo.png') }}" alt="logo"></a></div>*/
/* </header><!-- Fin header //-->*/
/* */
/* */
