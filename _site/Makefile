all: _script/global.min.js _style/css/main.css

_script/global.min.js: _script/global.js
	jsmin < _script/global.js > _script/global.min.js

_style/css/main.css: \
        _style/scss/base/color-scheme.scss _style/scss/base/icons.scss \
        _style/scss/base/transitions.scss _style/scss/base/typography.scss \
        _style/scss/elements/forms.scss _style/scss/elements/headings.scss \
        _style/scss/elements/links.scss _style/scss/elements/lists.scss \
        _style/scss/elements/media.scss _style/scss/elements/tables.scss \
        _style/scss/elements/text.scss _style/scss/global/footer.scss \
        _style/scss/global/header.scss _style/scss/global/layout.scss \
        _style/scss/global/no-layout.scss _style/scss/layout.scss \
        _style/scss/main.scss _style/scss/patterns/badge-headings.scss \
        _style/scss/patterns/badge-icons.scss _style/scss/patterns/billboard.scss \
        _style/scss/patterns/blurb.scss _style/scss/patterns/bricks.scss \
        _style/scss/patterns/button.scss _style/scss/patterns/chimney.scss \
        _style/scss/patterns/flags.scss _style/scss/patterns/heading-contrast.scss \
        _style/scss/patterns/heading.scss _style/scss/patterns/highlight.scss \
        _style/scss/patterns/insulate.scss _style/scss/patterns/island.scss \
        _style/scss/patterns/isolate.scss _style/scss/patterns/list-credits.scss \
        _style/scss/patterns/list-icon.scss _style/scss/patterns/lists.scss \
        _style/scss/patterns/masthead.scss _style/scss/patterns/nav-articles.scss \
        _style/scss/patterns/nav-breadcrumbs.scss _style/scss/patterns/nav-footer.scss \
        _style/scss/patterns/nav-global-primary.scss _style/scss/patterns/nav-global-secondary.scss \
        _style/scss/patterns/nav-page.scss _style/scss/patterns/nav-tabs.scss \
        _style/scss/patterns/nav-tags.scss _style/scss/patterns/nav.scss \
        _style/scss/patterns/offcanvas.scss _style/scss/patterns/page-title.scss \
        _style/scss/patterns/post.scss _style/scss/patterns/profile-medium.scss \
        _style/scss/patterns/profile-small.scss _style/scss/patterns/profile.scss \
        _style/scss/patterns/search-global.scss _style/scss/patterns/skip-to-nav.scss \
        _style/scss/patterns/slabs.scss _style/scss/patterns/spotlight.scss \
        _style/scss/patterns/stat.scss _style/scss/patterns/sticky-nav.scss \
        _style/scss/patterns/teaser.scss _style/scss/patterns/text-whisper.scss \
        _style/scss/patterns/wodge-large.scss _style/scss/patterns/wodge-small.scss \
        _style/scss/patterns/wodge.scss _style/scss/templates/documentation.scss
	sass -qf -t expanded -E utf-8 _style/scss/main.scss _style/css/main.css
