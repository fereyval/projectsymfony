<?php

/* TestGeneralBundle:Default:index.html.twig */
class __TwigTemplate_29bb5312030da8e85182a99f32c060894b87debadfe3e240f9289d4af0e3179d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TestGeneralBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7467ce996b0b313b3badab629eaaae1ac456303f73252548ca4bcba1ce3be77f = $this->env->getExtension("native_profiler");
        $__internal_7467ce996b0b313b3badab629eaaae1ac456303f73252548ca4bcba1ce3be77f->enter($__internal_7467ce996b0b313b3badab629eaaae1ac456303f73252548ca4bcba1ce3be77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestGeneralBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7467ce996b0b313b3badab629eaaae1ac456303f73252548ca4bcba1ce3be77f->leave($__internal_7467ce996b0b313b3badab629eaaae1ac456303f73252548ca4bcba1ce3be77f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_45c96f95763e2e575acf5e687b14f280857ccfbf7116d6674a25c4e93dbb37ba = $this->env->getExtension("native_profiler");
        $__internal_45c96f95763e2e575acf5e687b14f280857ccfbf7116d6674a25c4e93dbb37ba->enter($__internal_45c96f95763e2e575acf5e687b14f280857ccfbf7116d6674a25c4e93dbb37ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_45c96f95763e2e575acf5e687b14f280857ccfbf7116d6674a25c4e93dbb37ba->leave($__internal_45c96f95763e2e575acf5e687b14f280857ccfbf7116d6674a25c4e93dbb37ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d1736e3b56094ad0e9574d1d656731c1aa83fef104c55de3c72cd94d79af124 = $this->env->getExtension("native_profiler");
        $__internal_7d1736e3b56094ad0e9574d1d656731c1aa83fef104c55de3c72cd94d79af124->enter($__internal_7d1736e3b56094ad0e9574d1d656731c1aa83fef104c55de3c72cd94d79af124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->loadTemplate("::body.html.twig", "TestGeneralBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_7d1736e3b56094ad0e9574d1d656731c1aa83fef104c55de3c72cd94d79af124->leave($__internal_7d1736e3b56094ad0e9574d1d656731c1aa83fef104c55de3c72cd94d79af124_prof);

    }

    public function getTemplateName()
    {
        return "TestGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Acceuil{% endblock %}*/
/* {% block body %}*/
/* 	{% include '::body.html.twig' %}*/
/* {% endblock %}*/
/* */
