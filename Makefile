all: style/css/main.css style/css/layout.css style/css/cfa-light.css style/css/documentation.css

style/css/main.css: \
        style/scss/base/color-scheme.scss style/scss/base/icons.scss \
        style/scss/base/transitions.scss style/scss/base/typography.scss \
        style/scss/cfa-light.scss style/scss/documentation.scss \
        style/scss/elements/forms.scss style/scss/elements/headings.scss \
        style/scss/elements/links.scss style/scss/elements/lists.scss \
        style/scss/elements/media.scss style/scss/elements/tables.scss \
        style/scss/elements/text.scss style/scss/global/footer.scss \
        style/scss/global/header.scss style/scss/global/layout.scss \
        style/scss/global/no-layout.scss style/scss/layout.scss \
        style/scss/main.scss style/scss/patterns/alert.scss \
        style/scss/patterns/badge-headings.scss style/scss/patterns/billboard.scss \
        style/scss/patterns/blurb.scss style/scss/patterns/bricks.scss \
        style/scss/patterns/button.scss style/scss/patterns/calendar.scss \
        style/scss/patterns/chimney.scss style/scss/patterns/fade.scss \
        style/scss/patterns/heading-contrast.scss style/scss/patterns/heading.scss \
        style/scss/patterns/highlight.scss style/scss/patterns/list-credits.scss \
        style/scss/patterns/list-icon.scss style/scss/patterns/list-logos.scss \
        style/scss/patterns/lists.scss style/scss/patterns/map.scss \
        style/scss/patterns/masthead.scss style/scss/patterns/nav-articles.scss \
        style/scss/patterns/nav-breadcrumbs.scss style/scss/patterns/nav-footer.scss \
        style/scss/patterns/nav-global-primary.scss style/scss/patterns/nav-global-secondary.scss \
        style/scss/patterns/nav-page.scss style/scss/patterns/nav-tabs.scss \
        style/scss/patterns/nav-tags.scss style/scss/patterns/nav.scss \
        style/scss/patterns/offcanvas.scss style/scss/patterns/post-preview.scss \
        style/scss/patterns/post.scss style/scss/patterns/profile-medium.scss \
        style/scss/patterns/profile-small.scss style/scss/patterns/profile.scss \
        style/scss/patterns/search-global.scss style/scss/patterns/skip-to-nav.scss \
        style/scss/patterns/slabs.scss style/scss/patterns/spacing.scss \
        style/scss/patterns/spotlight.scss style/scss/patterns/stat.scss \
        style/scss/patterns/teaser.scss \
        style/scss/patterns/text-styles.scss style/scss/patterns/text-whisper.scss \
        style/scss/patterns/wodge-large.scss style/scss/patterns/wodge-small.scss \
        style/scss/patterns/wodge.scss style/scss/templates/documentation.scss
	sass -qf -t expanded -E utf-8 style/scss/main.scss style/css/main.css

#
# style/scss/templates/documentation.scss actually depends on all of main.scss,
# but we can use main.css as a pre-requisite here to lazily imply all that.
#
style/css/documentation.css: \
        style/scss/templates/documentation.scss \
        style/css/main.css
	sass -qf -t expanded -E utf-8 style/scss/documentation.scss style/css/documentation.css

style/css/layout.css: \
        style/scss/global/layout.scss \
        style/scss/layout.scss \
        style/scss/layout.scss
	sass -qf -t expanded -E utf-8 style/scss/layout.scss style/css/layout.css

style/css/cfa-light.css: \
        style/scss/base/typography.scss style/scss/base/color-scheme.scss \
        style/scss/elements/text.scss style/scss/elements/headings.scss \
        style/scss/elements/links.scss style/scss/elements/media.scss \
        style/scss/elements/tables.scss style/scss/elements/forms.scss \
        style/scss/patterns/text-whisper.scss style/scss/patterns/heading-contrast.scss \
        style/scss/patterns/heading.scss style/scss/patterns/alert.scss \
        style/scss/patterns/button.scss style/scss/patterns/blurb.scss \
        style/scss/patterns/masthead.scss style/scss/patterns/highlight.scss \
        style/scss/patterns/lists.scss style/scss/patterns/slabs.scss \
        style/scss/patterns/spacing.scss style/scss/patterns/spotlight.scss \
        style/scss/patterns/text-styles.scss style/scss/global/footer.scss \
        style/scss/global/no-layout.scss \
        style/scss/cfa-light.scss
	sass -qf -t expanded -E utf-8 style/scss/cfa-light.scss style/css/cfa-light.css
