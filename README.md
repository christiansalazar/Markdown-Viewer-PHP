Markdown Viewer PHP
===================

A wrapper for the [PHP Markdown project](http://michelf.com/projects/php-markdown/) by [Michel Fortin](http://michelf.com/) that allows you to view the results of Markdown pages in your local PHP enviroment.


Using Markdown Viewer PHP
-------------------------

Upload the contents to your PHP server; be it local or remote but where ever you mostly write your Markdown. Then hit the URL with the querystring "src=[FOLDER/FILE]", where [FOLDER/FILE] is replace it wiht the path to your Markdown file.

So on my local Mac I have the hostname set to "markdown.view" so I can then hit my browser with:

http://markdown.view/?src=/Users/me/Sites/Markdown-Viewer-PHP/README.md

This then outputs this very file for me to view with all the Markdown formatting.


Sources
---------------------
- [PHP Markdown](http://michelf.com/projects/php-markdown/)
- [Original Markdown Project](http://daringfireball.net/projects/markdown/)


Changelog
---------

**v1.1 (31 January 2011)**

- Removed `fopen()`, `fread()`, `fclose()` and using `file_get_contents()` instead (thanks to [Tom Leathrum](http://cs.jsu.edu/~leathrum/))

**v1 (11 October 2011)**

- First release

---

Legal
-----

[Markdown Viewer PHP](https://github.com/WolfieZero/Markdown-Viewer-PHP) by [Neil Sweeney](http://wolfiezero.com/) is licensed under a [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).

[PHP Markdown](http://michelf.com/projects/php-markdown/) is Copyright (c) 2004-2009 [Michel Fortin](http://michelf.com/) 

[Markdown](http://daringfireball.net/projects/markdown/) is Copyright (c) 2003-2006 [John Gruber](http://daringfireball.net/)