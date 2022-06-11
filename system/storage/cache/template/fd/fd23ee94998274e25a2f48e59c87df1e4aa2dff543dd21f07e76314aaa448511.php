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

/* Demo-Store/template/extension/module/blogger.twig */
class __TwigTemplate_1b40544db140a2ae81c782fca065754c664aac8fdb8cfe10788fdbe01a37c2b2 extends \Twig\Template
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
        echo "<div class=\"box webdigifyblog bottom-to-top hb-animate-element\">
\t";
        // line 2
        $context["sliderFor"] = 1;
        // line 3
        echo "\t";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 4
        echo "\t
 <div class=\"box-heading\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
    <div class=\"box-product ";
        // line 7
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo " owl-carousel blogcarousel ";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo " blog-grid";
        }
        echo "\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
    <div class=\"";
            // line 9
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t<div class=\"product-block\">
     ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 11)) {
                echo " 
\t  <div class=\"blog-left\">
\t  <div class=\"blog-image\">
\t  <img src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
\t  <div class=\"post-image-hover\"> </div>
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 16);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 16);
                echo "\"><i class=\"fa fa-link\"></i></a></p>
\t  </div>
\t  </div>
\t ";
            }
            // line 19
            echo " \t
\t <div class=\"blog-right\">  
\t   <div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 21);
            echo "</div>
\t   ";
            // line 23
            echo "\t   <div class=\"view-blog\">
\t  
\t\t  <h4><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 25);
            echo "</a> </h4>
\t\t  <div class=\"blog-desc\"> ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 26);
            echo "  </div> 
\t\t<div class=\"read-more\"> <a href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
            echo "\"> <i class=\"fa fa-link\"></i> ";
            echo ($context["text_read_more"] ?? null);
            echo "</a> </div>
\t  </div>
     
\t </div> 
    </div>
\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " \t 
   
  </div>
  ";
        // line 39
        echo "\t<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>
  </div>

 </div>


<script type=\"text/javascript\">

\$(document).ready(function(){
\$('.blogcarousel').owlCarousel({
\t\titems: 4,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,
\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\tpagination: true,
\t\titemsDesktop : [991,2],
\t\titemsDesktopSmall:[543,1]
\t});
});\t
</script>";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  143 => 33,  128 => 27,  124 => 26,  118 => 25,  114 => 23,  110 => 21,  106 => 19,  97 => 16,  88 => 14,  82 => 11,  73 => 9,  67 => 8,  53 => 7,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/blogger.twig", "");
    }
}
