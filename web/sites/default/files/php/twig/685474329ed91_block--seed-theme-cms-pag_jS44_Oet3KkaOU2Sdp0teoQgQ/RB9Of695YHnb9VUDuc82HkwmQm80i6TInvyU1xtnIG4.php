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

/* themes/custom/seed_cms_blog_theme/templates/block/block--seed-theme-cms-page-title.html.twig */
class __TwigTemplate_dd769ff853ce236db62836873d0b1883 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seed_theme_cms/blockPageTitle"), "html", null, true);
        yield "


";
        // line 5
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 7))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 8
($context["plugin_id"] ?? null))), ((        // line 9
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass(($context["layout"] ?? null)))) : (""))];
        // line 12
        yield "
<div";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 13), "html", null, true);
        yield ">
  ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "layout", "attributes", "title_prefix", "content", "title_suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/seed_cms_blog_theme/templates/block/block--seed-theme-cms-page-title.html.twig";
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
        return array (  70 => 16,  66 => 15,  62 => 14,  58 => 13,  55 => 12,  53 => 9,  52 => 8,  51 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/seed_cms_blog_theme/templates/block/block--seed-theme-cms-page-title.html.twig", "/var/www/html/web/themes/custom/seed_cms_blog_theme/templates/block/block--seed-theme-cms-page-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 5];
        static $filters = ["escape" => 1, "clean_class" => 7];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'clean_class'],
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
