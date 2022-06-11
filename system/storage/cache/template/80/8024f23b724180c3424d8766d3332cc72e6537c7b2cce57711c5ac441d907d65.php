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

/* Demo-Store/template/extension/module/productcategory.twig */
class __TwigTemplate_d7151926577fb7ce4eb0992191e7b05a45d0b33662d76c4552c859335b171efa extends \Twig\Template
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
        echo "<div class=\"box ProductbyCategory bottom-to-top hb-animate-element\">
<div class=\"container\">
<div class=\"row\"> 
\t
<div class=\"tab-head\">
  <div class=\"hometab-heading box-heading\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</div>
<div id=\"tabss\" class=\"htabs\">
  <ul class=\"etabs\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "  <li class=\"tab\">
    <a href=\"#";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "nameview", [], "any", false, false, false, 11);
            echo "</a>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </ul>
 </div>
</div>
<div class=\"product-column\">
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "  <div id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
            echo "\" class=\"tab-content\">
  <div class=\"box-content\">

    
  \t";
            // line 23
            if ((($context["slide_value"] ?? null) == 1)) {
                // line 24
                echo "  \t<div class=\"customNavigation\">
\t\t<a class=\"fa fa-angle-left prev\">&nbsp;</a>
\t\t<a class=\"fa fa-angle-right next\">&nbsp;</a>
\t\t</div>
\t";
            }
            // line 29
            echo "  
\t<div class=\"box-product ";
            // line 30
            if ((($context["slide_value"] ?? null) == 1)) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["slide_value"] ?? null) == 1)) {
                echo "productcategory";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 30);
                echo "-carousel";
            } else {
                echo "productcategory";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 30);
                echo "-grid";
            }
            echo "\">

   ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 32)) {
                echo " 
\t ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 34
                    echo "  <div class=\"";
                    if ((($context["slide_value"] ?? null) == 1)) {
                        echo "slider-item";
                    } else {
                        echo "product-items";
                    }
                    echo "\">
    <div class=\"product-block product-thumb transition\">
    <div class=\"product-block-inner\">
      <div class=\"image ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 37) == 0)) {
                        echo "outstock";
                    }
                    echo "\">
\t\t\t";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 38)) {
                        // line 39
                        echo "\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                        echo "\">
            <button class=\"wishlist\" type=\"button\"  title=\"";
                        // line 40
                        echo ($context["button_wishlist"] ?? null);
                        echo " \" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                        echo " ');\"></button>
\t\t\t\t\t<img src=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                        echo "\" class=\"img-responsive reg-image\"/>
            <div class=\"image_content\">
              <img class=\"img-responsive hover-image\" src=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 43);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                        echo "\"/>
            </div>
\t\t\t\t\t</a>
\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                        echo "\">
\t\t\t\t\t<img src=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                        echo "\" class=\"img-responsive\"/></a>
\t\t\t";
                    }
                    // line 50
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "        <span class=\"special-tag\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 51);
                        echo "%</span>
      ";
                    }
                    // line 53
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 53) == 0)) {
                        // line 54
                        echo "                <span class=\"stock_status\">";
                        echo ($context["text_outstock"] ?? null);
                        echo "</span>
              ";
                    }
                    // line 56
                    echo "\t\t</div>
     <div class=\"product-details\">
        <div class=\"caption\">   
           ";
                    // line 61
                    echo "            <h4><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                    echo " </a></h4>    
             ";
                    // line 62
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 62)) {
                        // line 63
                        echo "             <div class=\"rating\">
               ";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 65
                            echo "               ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 65) < $context["i"])) {
                                // line 66
                                echo "               <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
               ";
                            } else {
                                // line 68
                                echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                            }
                            // line 70
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "                &nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 71);
                        echo " Review</span>
                </div>
              ";
                    }
                    // line 74
                    echo "             ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "              <p class=\"price\">
                ";
                        // line 76
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                            // line 77
                            echo "                ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
                            echo "
                ";
                        } else {
                            // line 79
                            echo "                <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                            echo "</span>
                ";
                        }
                        // line 81
                        echo "                 ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 81)) {
                            // line 82
                            echo "                 <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82);
                            echo "</span>
                 ";
                        }
                        // line 84
                        echo "                  </p>
                 ";
                    }
                    // line 85
                    echo " 

                 <div class=\"product_hover_block\">
                  <div class=\"action\">
                 ";
                    // line 89
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 89) > 0)) {
                        // line 90
                        echo "                   <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90);
                        echo "');\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" >";
                        echo ($context["button_cart"] ?? null);
                        echo "</button>
                   ";
                    } else {
                        // line 92
                        echo "                   <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 92);
                        echo "');\" title=\"";
                        echo ($context["text_outstock"] ?? null);
                        echo "\" >";
                        echo ($context["text_outstock"] ?? null);
                        echo "</button>
                   ";
                    }
                    // line 94
                    echo "                   <div class=\"quickview-button\">
                  <a class=\"quickbox\"  title=\"";
                    // line 95
                    echo ($context["button_quickview"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 95);
                    echo "\"></a>
                   </div>
                 
                    <button class=\"compare_button\" type=\"button\"  title=\"";
                    // line 98
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 98);
                    echo " ');\"></button>
                    </div>
               </div>
             </div>  
          </div>
  </div>
    </div>
    <script> 
    \$('.total-review";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                    echo "').on('click', function() { 
    var t='";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 107);
                    echo "'; 
    const parseResult = new DOMParser().parseFromString(t, \"text/html\");
    const parsedUrl = parseResult.documentElement.textContent;
    window.location.href = parsedUrl + '&review';
    return false;
   });
  </script>
  </div>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo " ";
                // line 116
                echo "
";
            } else {
                // line 118
                echo " <span class=\"listing\">";
                echo ($context["listing"] ?? null);
                echo "</span> 
";
            }
            // line 120
            echo "</div>
</div>
<span class=\"productcategory";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 122);
            echo "_default_width wdproductcategory\" style=\"display:none; visibility:hidden\"> </span>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo " ";
        // line 125
        echo "</div>

";
        // line 127
        echo ($context["bannersecond"] ?? null);
        echo "

</div>
</div>
</div>

<script>
\$('#tabss a').tabss();
</script>

<style>

</style>

";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/extension/module/productcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 127,  389 => 125,  387 => 124,  378 => 122,  374 => 120,  368 => 118,  364 => 116,  362 => 115,  347 => 107,  343 => 106,  330 => 98,  322 => 95,  319 => 94,  309 => 92,  299 => 90,  297 => 89,  291 => 85,  287 => 84,  279 => 82,  276 => 81,  268 => 79,  262 => 77,  260 => 76,  257 => 75,  254 => 74,  245 => 71,  239 => 70,  235 => 68,  231 => 66,  228 => 65,  224 => 64,  221 => 63,  219 => 62,  212 => 61,  207 => 56,  201 => 54,  198 => 53,  192 => 51,  189 => 50,  180 => 48,  175 => 47,  164 => 43,  155 => 41,  149 => 40,  144 => 39,  142 => 38,  136 => 37,  125 => 34,  121 => 33,  117 => 32,  98 => 30,  95 => 29,  88 => 24,  86 => 23,  78 => 19,  74 => 18,  68 => 14,  57 => 11,  54 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/extension/module/productcategory.twig", "");
    }
}
