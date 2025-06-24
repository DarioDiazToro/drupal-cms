<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/seed_cms_blog_theme/templates/layout/page.html.twig */
class __TwigTemplate_7f593cba1b8ea1cf48cf9ffc853d2ddd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "
";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "method", false, false, true, 49) == "blog")) {
            // line 50
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seed_theme_cms/blogPost"), "html", null, true);
            yield "
";
        }
        // line 52
        yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 56
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 56)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 56))) {
            // line 57
            yield "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

        ";
            // line 60
            yield "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
            yield "\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
            // line 72
            yield "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 75), "html", null, true);
            yield "

              ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 77))) {
                // line 78
                yield "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                // line 79
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                yield "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86), "html", null, true);
                yield "
                  ";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 90
            yield "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 95
        yield "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 100), "html", null, true);
        yield "
          <div class=\"main-content__container container\">
            ";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 102), "html", null, true);
        yield "
            ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 103), "html", null, true);
        yield "
  
            ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 105), "html", null, true);
        yield "
            ";
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 106)) {
            // line 107
            yield "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 109), "html", null, true);
            yield "
                </main>

                ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 112), "html", null, true);
            yield "
              </div>
            ";
        } else {
            // line 115
            yield "              <main role=\"main\">
                ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 116), "html", null, true);
            yield "
              </main>
            ";
        }
        // line 119
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 119), "html", null, true);
        yield "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 123), "html", null, true);
        yield "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 130), "html", null, true);
        yield "
        ";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 131), "html", null, true);
        yield "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/seed_cms_blog_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  202 => 131,  198 => 130,  188 => 123,  180 => 119,  174 => 116,  171 => 115,  165 => 112,  159 => 109,  155 => 107,  153 => 106,  149 => 105,  144 => 103,  140 => 102,  135 => 100,  128 => 95,  121 => 90,  115 => 87,  111 => 86,  102 => 80,  98 => 79,  95 => 78,  93 => 77,  88 => 75,  83 => 72,  71 => 62,  67 => 60,  63 => 57,  61 => 56,  55 => 52,  49 => 50,  47 => 49,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/seed_cms_blog_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/seed_cms_blog_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 49];
        static $filters = ["escape" => 50, "t" => 62];
        static $functions = ["attach_library" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
