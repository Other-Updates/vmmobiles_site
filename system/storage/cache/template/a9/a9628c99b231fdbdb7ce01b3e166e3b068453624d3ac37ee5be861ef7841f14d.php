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

/* Demo-Store/template/extension/module/webdigifytabs.twig */
class __TwigTemplate_51f85ac4919cbfd422dd8e80127e853e517e74ec78e5aadb6c1c76bc0bcf3a98 extends \Twig\Template
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
        echo "<div class=\"hometab box bottom-to-top hb-animate-element\">
<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"tab-head\">
\t<div class=\"hometab-heading box-heading\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
<div id=\"tabs\" class=\"htabs\">
  <ul class='etabs'>
\t<li class='tab'>
\t\t";
        // line 9
        if (($context["latestproducts"] ?? null)) {
            // line 10
            echo "\t\t\t<a href=\"#tab-latest\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a>
\t\t";
        }
        // line 12
        echo "\t</li>
\t<li class='tab'>
\t\t";
        // line 14
        if (($context["bestsellersproducts"] ?? null)) {
            // line 15
            echo "\t\t<a href=\"#tab-bestseller\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a>
\t\t";
        }
        // line 17
        echo "\t</li>\t
\t<li class='tab'>
\t\t";
        // line 19
        if (($context["specialproducts"] ?? null)) {
            // line 20
            echo "\t\t\t<a href=\"#tab-special\">";
            echo ($context["tab_special"] ?? null);
            echo "</a>
\t\t";
        }
        // line 22
        echo "\t</li>
\t</ul>

 </div>
</div>
<div class=\"product-column\">
";
        // line 28
        if (($context["bestsellersproducts"] ?? null)) {
            // line 29
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 32
            $context["sliderFor"] = 5;
            // line 33
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestsellersproducts"] ?? null));
            // line 34
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 35
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 36
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestsellersproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 46) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 49
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
                    echo " ');\"></button>
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 50);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 52);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 55);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 56);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 59);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 61) == 0)) {
                    // line 62
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74) < $context["i"])) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        } else {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 80);
                    echo " Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 85
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 98) > 0)) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 99);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t <a class=\"quickbox\"  title=\"";
                // line 104
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 104);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 107
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 131
        if (($context["latestproducts"] ?? null)) {
            // line 132
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 136
            $context["sliderFor"] = 5;
            // line 137
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["latestproducts"] ?? null));
            // line 138
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 139
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 140
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 147
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 150) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 151
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   <button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 153
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
                    echo " ');\"></button>
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 154);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 156);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 159
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 159);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 160);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 162
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 162)) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 163);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 165) == 0)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 175);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 177
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 177)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 180) < $context["i"])) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        } else {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t &nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 186);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 186);
                    echo " Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 191
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 191)) {
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 192);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 194);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 194);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 196)) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 197);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 203
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 203) > 0)) {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 204);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                } else {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 209
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 209);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 212
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 212);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 220);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 221);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 236
        echo "</div>
";
        // line 237
        echo ($context["bannerfirst"] ?? null);
        echo "
</div></div>
</div>
<script>
\$('#tabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/webdigifytabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 237,  665 => 236,  657 => 230,  642 => 221,  638 => 220,  625 => 212,  617 => 209,  614 => 208,  604 => 206,  594 => 204,  592 => 203,  588 => 201,  584 => 199,  576 => 197,  573 => 196,  565 => 194,  559 => 192,  557 => 191,  554 => 190,  551 => 189,  542 => 186,  536 => 185,  532 => 183,  528 => 181,  525 => 180,  521 => 179,  518 => 178,  516 => 177,  508 => 175,  502 => 168,  496 => 166,  493 => 165,  487 => 163,  484 => 162,  475 => 160,  470 => 159,  460 => 156,  451 => 154,  445 => 153,  440 => 152,  438 => 151,  432 => 150,  421 => 147,  417 => 146,  402 => 145,  395 => 140,  393 => 139,  390 => 138,  387 => 137,  385 => 136,  379 => 132,  377 => 131,  369 => 125,  354 => 116,  350 => 115,  337 => 107,  329 => 104,  326 => 103,  316 => 101,  306 => 99,  304 => 98,  299 => 95,  295 => 93,  287 => 91,  284 => 90,  276 => 88,  270 => 86,  268 => 85,  265 => 84,  262 => 83,  253 => 80,  247 => 79,  243 => 77,  239 => 75,  236 => 74,  232 => 73,  229 => 72,  227 => 71,  220 => 70,  214 => 64,  208 => 62,  205 => 61,  199 => 59,  196 => 58,  187 => 56,  182 => 55,  172 => 52,  163 => 50,  157 => 49,  152 => 48,  150 => 47,  144 => 46,  133 => 43,  129 => 42,  114 => 41,  107 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  92 => 29,  90 => 28,  82 => 22,  76 => 20,  74 => 19,  70 => 17,  64 => 15,  62 => 14,  58 => 12,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/webdigifytabs.twig", "");
    }
}
