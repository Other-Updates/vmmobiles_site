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

/* Demo-Store/template/extension/module/latest.twig */
class __TwigTemplate_a66c47ab18331bae35b31c9eca029b0429090281ee0cbc892bcfc1ee5dbfe090 extends \Twig\Template
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
        echo "<div class=\"box\">
  <div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
\t\t";
        // line 4
        $context["sliderFor"] = 5;
        // line 5
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 6
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 7
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 12
        echo "\t
\t<div class=\"box-product ";
        // line 13
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "latest-carousel";
        } else {
            echo " latest-grid";
        }
        echo "\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t\t<div class=\"image\">
\t\t\t";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">
\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 21
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 21);
                echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t<img src=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 23);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\"/></div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 29
            echo "\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
            echo " </a></h4>
\t\t\t\t";
            // line 45
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45)) {
                // line 46
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 47
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48);
                    echo "
         \t\t\t";
                } else {
                    // line 50
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    echo "</span>
\t\t\t        ";
                }
                // line 52
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 53);
                    echo "</span>
          \t\t\t";
                }
                // line 55
                echo "\t\t\t        </p>
\t            ";
            }
            // line 57
            echo "\t\t\t</div>\t\t
 \t    
\t\t\t<div class=\"product_hover_block\">
\t\t\t  <div class=\"action\">
\t\t\t\t <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
            echo " ');\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ><i class=\"fa fa-shopping-cart\" area-hidden=\"true\"></i> </button>
\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 63
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 63);
            echo "\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t </div>
\t\t\t\t <button class=\"wishlist\" type=\"button\"  title=\"";
            // line 65
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
            // line 66
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t  </div>
\t\t\t</div>
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
  </div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 75,  212 => 66,  206 => 65,  199 => 63,  192 => 61,  186 => 57,  182 => 55,  174 => 53,  171 => 52,  163 => 50,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  143 => 32,  138 => 29,  129 => 27,  124 => 26,  114 => 23,  106 => 22,  100 => 21,  95 => 20,  93 => 19,  81 => 15,  77 => 14,  63 => 13,  60 => 12,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/latest.twig", "");
    }
}
