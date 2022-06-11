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

/* Demo-Store/template/extension/module/special.twig */
class __TwigTemplate_544cd66c9ad67a59e3076e0b324b55680d8f26081607fbf54c052cbe7d4035df extends \Twig\Template
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
        echo "\t<div class=\"box special bottom-to-top hb-animate-element\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
\t\t";
        // line 6
        $context["sliderFor"] = 2;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 8
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 9
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 14
        echo "\t
\t<div class=\"box-product ";
        // line 15
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image\">
\t\t\t";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">
\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 23
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 23);
                echo " ');\"></button>
\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 33
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t<span class=\"special-tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 34);
                echo "%</span>
\t\t";
            }
            // line 36
            echo "\t\t   
\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
            echo " </a></h4>
\t\t\t\t";
            // line 43
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 45) < $context["i"])) {
                    // line 46
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t</div>
\t\t\t\t";
            // line 53
            echo "\t\t\t\t
\t\t\t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54)) {
                // line 55
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 56
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                    echo "
         \t\t\t";
                } else {
                    // line 59
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                    echo "</span>
\t\t\t        ";
                }
                // line 61
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 62);
                    echo "</span>
          \t\t\t";
                }
                // line 64
                echo "\t\t\t        </p>
\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t";
            // line 67
            echo "\t\t\t</div>\t\t
 \t    
\t\t\t
\t\t\t
\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t<div data-countdown=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 74);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t</div>\t
\t\t\t\t";
            // line 78
            if ((($context["stock_qty"] ?? null) == "true")) {
                // line 79
                echo "\t\t\t\t<span class=\"stock_msg\" style=\"color:#228B22;\">";
                echo ($context["text_productavail"] ?? null);
                echo " : ";
                echo ($context["qty_stock"] ?? null);
                echo "</span>
\t\t\t";
            }
            // line 81
            echo "\t\t\t\t
\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 84) > 0)) {
                // line 85
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 85);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t";
            } else {
                // line 87
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 87);
                echo "');\" title=\"";
                echo ($context["text_outstock"] ?? null);
                echo "\" >";
                echo ($context["text_outstock"] ?? null);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 90
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 90);
            echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t  
\t\t\t\t\t   <button class=\"compare_button\" type=\"button\"  title=\"";
            // line 93
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 93);
            echo " ');\"></button>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "</div>
  </div>
</div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 102,  301 => 93,  293 => 90,  290 => 89,  280 => 87,  270 => 85,  268 => 84,  263 => 81,  255 => 79,  253 => 78,  250 => 77,  244 => 74,  241 => 73,  239 => 72,  232 => 67,  230 => 66,  226 => 64,  218 => 62,  215 => 61,  207 => 59,  201 => 57,  199 => 56,  196 => 55,  194 => 54,  191 => 53,  188 => 51,  182 => 50,  178 => 48,  174 => 46,  171 => 45,  167 => 44,  164 => 43,  158 => 41,  151 => 36,  145 => 34,  142 => 33,  133 => 31,  128 => 30,  117 => 26,  108 => 24,  102 => 23,  97 => 22,  95 => 21,  83 => 17,  79 => 16,  65 => 15,  62 => 14,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/special.twig", "");
    }
}
