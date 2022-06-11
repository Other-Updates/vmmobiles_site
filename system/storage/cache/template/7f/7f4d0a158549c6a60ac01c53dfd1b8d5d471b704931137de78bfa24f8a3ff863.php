<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Demo-Store/template/information/blogger_blogs.twig */
class __TwigTemplate_8c0242e8618fc6005726b363eb3aa92d3a0360bb4f608e67b9c170450eb8bb06 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo " 
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
   <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  
     
  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo " 
     ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "   
    <div id=\"content\" class=\"";
        // line 18
        echo ($context["class"] ?? null);
        echo "  all-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
     <h1>";
        // line 19
        echo ($context["text_blogs"] ?? null);
        echo "</h1>
      ";
        // line 20
        if (($context["blogs"] ?? null)) {
            echo " 
      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
      <div class=\"panel-default\" >
        
       ";
                // line 25
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 25)) {
                    echo " 
        ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
        <div class=\"panel panel-default col-lg-6\">
          <div class=\"panel-body\">
      
       ";
                        // line 30
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 30)) {
                            echo " 
       <div class=\"blog-left-content\">
      <div class=\"blog-image\">
        <img src=\"";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 33);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-thumbnail\" />
      <div class=\"post-image-hover\"> </div>
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 35
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 35);
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 35);
                            echo "\"><i class=\"fa fa-link\"></i></a></p>
      
        </div>
      </div>
      ";
                        }
                        // line 39
                        echo " 
      <div class=\"blog-right-content\">
            <h5><a href=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 41);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 41);
                        echo "</a></h5>
            <div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 42);
                        echo "
             <div class=\"blog-date\"> ";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 43);
                        echo "</div></div>
            <div class=\"blog-desc\">";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 44);
                        echo "  </div>
      ";
                        // line 46
                        echo "      <div class=\"read-more\"> <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 46);
                        echo "\">  ";
                        echo ($context["text_read_more"] ?? null);
                        echo "</a> </div>
          
            </div>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "        
         ";
                } else {
                    // line 53
                    echo "   
        <div class=\"panel-body text-center\">";
                    // line 54
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
        ";
                }
                // line 55
                echo " 
        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "       ";
        } else {
            echo "   
      <div class=\"panel-body text-center\">";
            // line 59
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
               ";
        }
        // line 60
        echo " 
    ";
        // line 61
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 64,  226 => 62,  222 => 61,  219 => 60,  214 => 59,  209 => 58,  201 => 55,  196 => 54,  193 => 53,  189 => 52,  174 => 46,  170 => 44,  166 => 43,  162 => 42,  156 => 41,  152 => 39,  142 => 35,  133 => 33,  127 => 30,  118 => 26,  113 => 25,  105 => 21,  101 => 20,  97 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/information/blogger_blogs.twig", "");
    }
}
