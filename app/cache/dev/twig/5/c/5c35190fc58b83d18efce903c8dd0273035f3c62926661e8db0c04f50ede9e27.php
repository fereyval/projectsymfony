<?php

/* TestGeneralBundle:Default:index.html.twig */
class __TwigTemplate_7a0f62ac827c386cd9f40fc5218e0a2923a5d6f688c8f96b375ba7e9f731376f extends Twig_Template
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
        $__internal_f35aa192ce46f18e70a5a99c806a280a590e6a9c0a18558a8e2c1b82d1045004 = $this->env->getExtension("native_profiler");
        $__internal_f35aa192ce46f18e70a5a99c806a280a590e6a9c0a18558a8e2c1b82d1045004->enter($__internal_f35aa192ce46f18e70a5a99c806a280a590e6a9c0a18558a8e2c1b82d1045004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestGeneralBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35aa192ce46f18e70a5a99c806a280a590e6a9c0a18558a8e2c1b82d1045004->leave($__internal_f35aa192ce46f18e70a5a99c806a280a590e6a9c0a18558a8e2c1b82d1045004_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_349ee0773f099d5ec0e64bba66ffe45bcd291b4d7ae8c0cc32f9343730fe5406 = $this->env->getExtension("native_profiler");
        $__internal_349ee0773f099d5ec0e64bba66ffe45bcd291b4d7ae8c0cc32f9343730fe5406->enter($__internal_349ee0773f099d5ec0e64bba66ffe45bcd291b4d7ae8c0cc32f9343730fe5406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_349ee0773f099d5ec0e64bba66ffe45bcd291b4d7ae8c0cc32f9343730fe5406->leave($__internal_349ee0773f099d5ec0e64bba66ffe45bcd291b4d7ae8c0cc32f9343730fe5406_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1cd7a299f17c5a8d4445d72f4219408cec89f21acfe9d67fb124f25d33269ad = $this->env->getExtension("native_profiler");
        $__internal_f1cd7a299f17c5a8d4445d72f4219408cec89f21acfe9d67fb124f25d33269ad->enter($__internal_f1cd7a299f17c5a8d4445d72f4219408cec89f21acfe9d67fb124f25d33269ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->loadTemplate("::body.html.twig", "TestGeneralBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_f1cd7a299f17c5a8d4445d72f4219408cec89f21acfe9d67fb124f25d33269ad->leave($__internal_f1cd7a299f17c5a8d4445d72f4219408cec89f21acfe9d67fb124f25d33269ad_prof);

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
