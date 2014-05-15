CKEditor Xmas plugin for Drupal 8
=================================

A plugin that brings up a holiday greetings card.
The plugin can be customized with a different image, border, and text.

Drupal version: 8.x

## Installation

### Git clone

To install plugin via git just go to your `modules` folder. Clone repository to its default folder  or manually
point it to `xmas`.

    > git clone git@github.com:vokiel/xmas.git xmas

### Git submodule

If you are using git for your project and you want to integrate this plugin, we recommend to add this repository
as a [submodule](http://git-scm.com/book/en/Git-Tools-Submodules).

Run this command from your Drupal root directory.

    > git submodule add git://github.com:vokiel/xmas.git modules/xmas

### Enable the module

Navigate to `Administration > Extend` or `http://example.com/admin/modules`.
Check the `Enabled` box next to the module and then click the `Save Configuration` button at the bottom.

## Configuration

Open _Text formats and editors_ configuration page navigating to `Administration > Configuration > Content authoring`
or `http://example.com/admin/config/content/formats`.

Choose text formats to define and click on `Configure` button on the right.

In _Toolbar configuration_ section drag&amp;drop _Xmas_ button from _Available buttons_ to _Active toolbar_,
then configure plugin settings in _CKEditor plugin settings_ form.

Finally, save your configuration.


## License

Copyright (c) 2003-2014, [CKSource](http://cksource.com/) - Frederico Knabben. All rights reserved.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
