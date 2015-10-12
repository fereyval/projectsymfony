<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1b1d7ae7cb9ce79eadb95e3a56f629434cb93dde7ff96e5d637dc3eacb3b60f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe3296cfc158c7f6d2a1f18d378a8eff9df9477b3d4f3e7aa975b0d3a694606c = $this->env->getExtension("native_profiler");
        $__internal_fe3296cfc158c7f6d2a1f18d378a8eff9df9477b3d4f3e7aa975b0d3a694606c->enter($__internal_fe3296cfc158c7f6d2a1f18d378a8eff9df9477b3d4f3e7aa975b0d3a694606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3296cfc158c7f6d2a1f18d378a8eff9df9477b3d4f3e7aa975b0d3a694606c->leave($__internal_fe3296cfc158c7f6d2a1f18d378a8eff9df9477b3d4f3e7aa975b0d3a694606c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a156fd2cee19b7be6f53e170796ebcf8ab1b31f4871312ca51298a870b57d9f = $this->env->getExtension("native_profiler");
        $__internal_6a156fd2cee19b7be6f53e170796ebcf8ab1b31f4871312ca51298a870b57d9f->enter($__internal_6a156fd2cee19b7be6f53e170796ebcf8ab1b31f4871312ca51298a870b57d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a156fd2cee19b7be6f53e170796ebcf8ab1b31f4871312ca51298a870b57d9f->leave($__internal_6a156fd2cee19b7be6f53e170796ebcf8ab1b31f4871312ca51298a870b57d9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39185bd02c1bb14c3c35644642beff160cc3a9a23b3e9f9ce220cbccf746fd56 = $this->env->getExtension("native_profiler");
        $__internal_39185bd02c1bb14c3c35644642beff160cc3a9a23b3e9f9ce220cbccf746fd56->enter($__internal_39185bd02c1bb14c3c35644642beff160cc3a9a23b3e9f9ce220cbccf746fd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39185bd02c1bb14c3c35644642beff160cc3a9a23b3e9f9ce220cbccf746fd56->leave($__internal_39185bd02c1bb14c3c35644642beff160cc3a9a23b3e9f9ce220cbccf746fd56_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7077ef2fd6d56ed699c823e564bcdda74fdbc4af10960a0f3eed62e8ae25564 = $this->env->getExtension("native_profiler");
        $__internal_a7077ef2fd6d56ed699c823e564bcdda74fdbc4af10960a0f3eed62e8ae25564->enter($__internal_a7077ef2fd6d56ed699c823e564bcdda74fdbc4af10960a0f3eed62e8ae25564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a7077ef2fd6d56ed699c823e564bcdda74fdbc4af10960a0f3eed62e8ae25564->leave($__internal_a7077ef2fd6d56ed699c823e564bcdda74fdbc4af10960a0f3eed62e8ae25564_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
