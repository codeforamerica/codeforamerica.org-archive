Code For America Dot Org
========================

## Description

Code for America is redoing our website.

For the past few months, we’ve worked with Colorado branding firm [Dojo4](http://dojo4.com/), Brighton web design firm [Clearleft](http://clearleft.com/), and our own internal communications and technology teams on a new visual design and front-end for the Code for America website. Today, we’re making the first of this work public and asking for input from the CfA community to ensure that the information presented on the site is accurate and up-to-date.

## Who’s Working On It

* [Michal Migurski](http://alpha.codeforamerica.org/people/michal-migurski): code, hosting, copy/paste
* [Cyd Harrell](http://alpha.codeforamerica.org/people/cyd-harrell): information architecture, design
* [Dana Oshiro](http://alpha.codeforamerica.org/people/dana-oshiro): content, copy/paste
* [Andrew Hyder](http://alpha.codeforamerica.org/people/andrew-hyder): feedback

## How to contribute

#### Specific help we need
We need your help to keep our content accurate and up to date. The easiest way for to help is to submit a pull request with one of the below:
* For members of the community including fellows, brigade captains, and staff, find yourself and your friends in the [big list of people](http://alpha.codeforamerica.org/people/) or one of the [lists of civic hackers](http://alpha.codeforamerica.org/geeks/our-geeks/) and let us know if your bio is correct and photo current. Personal photos should be about 200 x 200px.
* If you built an app or project as part of the fellowship or accelerator programs, find it on the [apps page](http://alpha.codeforamerica.org/apps) and verify that we’ve got it described accurately.
* Check government information for brigades and fellowships on the [2014 government partners](http://alpha.codeforamerica.org/cities/2014-cities) and [alumni government partners](http://alpha.codeforamerica.org/cities/alumni) pages and fill in any blanks you might find.
* We need quality photos for page headers. Should be about 1200 x 500px, JPG compressed to 150kb max.

#### <a name="pulls"></a>Submitting a Pull Request
An easy way to submit a pull request for just simple text changes is to:

1. Find the page you'd like to edit on the [static-site branch](https://github.com/codeforamerica/codeforamerica.org/tree/static-site).
2. Use Github's built in editor to make your changes.
3. Down below the editor window, include a brief one sentence description of what you changed. Something like "Updated Andrew Hyder's bio".
4. Click the green Propose File Change button.
5. You'll get to review your changes. If everything looks right, click the green "Send pull request" button.

If you need to add or replace an image, you'll need to:

1. Fork the project.
2. Create a topic branch.
3. Add the image in the correct directory.
4. Commit and push your changes.
5. Submit a pull request.

#### <a name="issues"></a>Submitting an Issue
We use the [GitHub issue tracker](https://github.com/codeforamerica/codeforamerica.org/issues) to track bugs and features. Before
submitting a bug report or feature request, check to make sure it hasn't
already been submitted. You can indicate support for an existing issue by
voting it up. When submitting a bug report, please include a screenshot and any additioanl details that can help us debug, such as your operating system and browser version.

#### Previewing Your Changes Using Jekit

You can use the nifty [Jekit](https://jekit.codeforamerica.org/) app to preview changes you make to this site.

To do this, fork this repo, and commit your changes on a branch to your fork. You can then preview what your changes look like by navigating to:

https://jekit.codeforamerica.org/USERNAME/codeforamerica.org/BRANCHNAME/

For a basic example of its usage, if GitHub user **@lolname** has made changes to the /people/dave-guarino page on their fork (on the `static-site` branch), they can preview their changes using Jekit by going to:

https://jekit.codeforamerica.org/lolname/codeforamerica.org/static-site/people/dave-guarino/

#### Running the Site Locally on Your Computer
To run the site locally on your own computer (most helpful for previewing your own changes), you will need Jekyll installed ([click here for Jekyll installation instructions](http://jekyllrb.com/docs/installation/).) Assuming you have Ruby and Bundler installed, just run `bundle install` from the root of this project.

Fork and clone the repository, check out the `static-site` branch, and then run the following command in the root directory of the repo:

`jekyll serve`

Your computer should now be serving your local copy of the site at:

[http://0.0.0.0:4000](http://0.0.0.0:4000).

## Technology Patterns
Uses Jekyll for templating – converted HTML files are in the _site folder.

## <a name="copyright"></a>Copyright
Copyright (c) 2013 Code for America. See [LICENSE](https://github.com/codeforamerica/codeforamerica.org/blob/master/LICENSE) for details.
