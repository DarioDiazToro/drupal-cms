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

/* themes/custom/seed_cms_blog_theme/templates/views/views-view.html.twig */
class __TwigTemplate_813b605751da0ce7018c9be373827f1f extends Template
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
        // line 33
        yield "


";
        // line 37
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["id"] ?? null))), ("view-id-" .         // line 40
($context["id"] ?? null)), ("view-display-id-" .         // line 41
($context["display_id"] ?? null)), ((        // line 42
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 45
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 45), "html", null, true);
        yield ">
  ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 47
        if (($context["title"] ?? null)) {
            // line 48
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 50
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["title_suffix"] ?? null), "filter_tags", [], "any", false, false, true, 51)) {
            // line 52
            yield "  <div class=\"view-active-filters\">
    ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_suffix"] ?? null), "filter_tags", [], "any", false, false, true, 53), "html", null, true);
            yield "
  </div>
";
        }
        // line 56
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 57
            yield "    <div class=\"view-header\">
      ";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 61
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 62
            yield "    <div class=\"view-filters\">
      ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 66
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 67
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 71
        yield "
  ";
        // line 72
        if (($context["rows"] ?? null)) {
            // line 73
            yield "    <div class=\"view-content\">
      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 76
($context["empty"] ?? null)) {
            // line 77
            yield "    <div class=\"view-empty\">
      ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 81
        yield "
  ";
        // line 82
        if (($context["pager"] ?? null)) {
            // line 83
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 85
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 86
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 90
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 91
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 93
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 94
            yield "    <div class=\"view-footer\">
      ";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 98
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 99
            yield "    ";
            // line 102
            yield "  ";
        }
        // line 103
        yield "</div>


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/seed_cms_blog_theme/templates/views/views-view.html.twig";
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
        return array (  200 => 103,  197 => 102,  195 => 99,  192 => 98,  186 => 95,  183 => 94,  180 => 93,  174 => 91,  171 => 90,  165 => 87,  162 => 86,  159 => 85,  153 => 83,  151 => 82,  148 => 81,  142 => 78,  139 => 77,  137 => 76,  132 => 74,  129 => 73,  127 => 72,  124 => 71,  118 => 68,  115 => 67,  112 => 66,  106 => 63,  103 => 62,  100 => 61,  94 => 58,  91 => 57,  88 => 56,  82 => 53,  79 => 52,  77 => 51,  72 => 50,  66 => 48,  64 => 47,  60 => 46,  55 => 45,  53 => 42,  52 => 41,  51 => 40,  50 => 39,  49 => 37,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/seed_cms_blog_theme/templates/views/views-view.html.twig", "/var/www/html/web/themes/custom/seed_cms_blog_theme/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 37, "if" => 47];
        static $filters = ["clean_class" => 39, "escape" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
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
