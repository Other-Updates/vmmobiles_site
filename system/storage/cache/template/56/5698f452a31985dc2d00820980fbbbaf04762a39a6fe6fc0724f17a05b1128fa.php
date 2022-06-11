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

/* Demo-Store/template/common/menu.twig */
class __TwigTemplate_06ec74db04edf0d5614b313126b04459c1815324ae0d33c5383c86a3d2a83f84 extends \Twig\Template
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
        echo "<nav class=\"nav-container\" role=\"navigation\">
<div class=\"nav-inner\">
<!-- ======= Menu Code START ========= -->
";
        // line 4
        if (($context["categories"] ?? null)) {
            // line 5
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\">
<div id=\"res-menu\" class=\"main-menu nav-container1 responsive-menu\">
<div class=\"nav-responsive\"><span>Menu</span> </div>
 
 
\t<ul class=\"main-navigation\"><div class=\"menu expandable\"><span>Menu</span></div>
\t  \t<li><a href=\"";
            // line 12
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></li>
    \t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>

\t\t\t  ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 17), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 18
                        echo "\t\t\t\t<ul>
                ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 21
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 21)) {
                                // line 22
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                                echo "</a>
\t\t\t\t\t\t\t\t";
                                // line 23
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 23)) {
                                    echo "<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 23);
                                    echo "\"  alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                                    echo "\" />";
                                }
                                // line 24
                                echo "\t\t\t\t\t\t
\t\t\t              ";
                                // line 25
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 25), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 25)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 25), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 26
                                    echo "\t\t\t\t\t\t\t<ul class=\"col14\">
\t\t\t\t\t\t\t  ";
                                    // line 27
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 28
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 28);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 28);
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 30
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                echo "\t\t\t\t\t\t
\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 35
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 35);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 35);
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 37
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "            

\t\t\t</li>
        ";
                } else {
                    // line 46
                    echo "\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                    echo "</a></li>
       ";
                }
                // line 48
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "  </ul>
  
</div>
<div class=\"static-menu\">
\t<ul id=\"static-menu\">
\t\t<li><a href=\"";
            // line 54
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></li>
\t\t<li class=\"dropdown\"><a href=\"#\">";
            // line 55
            echo ($context["text_manufacturer"] ?? null);
            echo " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t";
            // line 57
            echo "\t\t\t<div class=\"dropdown-menu\">
        \t\t<div class=\"dropdown-inner\">
  
  \t\t\t\t<div class=\"manufacturer-content-home\">
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 62
                echo "        <div class=\"brand-name\">
        <a href=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 63);
                echo "\">
        \t";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 64) != "image/")) {
                    // line 65
                    echo "        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 65);
                    echo "\" alt=\"brands\" class=\"img-responsive reg-image\"/>
        \t";
                }
                // line 67
                echo "        \t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 67);
                echo "</span>
        </a>
    \t</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    </div>
            <span class=\"more-brand\"><a href=\"";
            // line 72
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_all"] ?? null);
            echo " <i class=\"fa fa-angle-right\"></i></a></span>
       </div>
        \t</div>
\t";
            // line 76
            echo "\t\t</li>
\t\t<li class=\"hot menu-item\"><a href=\"";
            // line 77
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
\t\t<li><a href=\"";
            // line 78
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
    \t<li class=\"toplink\"><a href=\"";
            // line 79
            echo ($context["all_blogs"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo " </a></li>
\t\t
\t</ul>
</div>
  
</div>
";
        }
        // line 86
        echo "</div>
</nav>   

";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 86,  264 => 79,  258 => 78,  252 => 77,  249 => 76,  241 => 72,  238 => 71,  227 => 67,  221 => 65,  219 => 64,  215 => 63,  212 => 62,  208 => 61,  202 => 57,  198 => 55,  192 => 54,  185 => 49,  179 => 48,  171 => 46,  165 => 42,  157 => 39,  150 => 37,  142 => 35,  137 => 32,  130 => 30,  119 => 28,  115 => 27,  112 => 26,  108 => 25,  105 => 24,  97 => 23,  90 => 22,  88 => 21,  85 => 20,  81 => 19,  78 => 18,  74 => 17,  66 => 15,  63 => 14,  59 => 13,  53 => 12,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/common/menu.twig", "");
    }
}
