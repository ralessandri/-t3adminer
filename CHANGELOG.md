# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [9.5.0] - 2021-02-20
### Changed
- Switched to markdown in Changelog
- Switched to markdown in Readme
- Updated to Adminer 4.7.7
- Updated dependency on PHP to 7.2.0-7.4.0
- Updated plugins to latest version (re-applying modifications) (Thanks to Benjamin Serfhos)

### Fixed
- Blocked output of cache headers to prevent errors when restarting the session inside Adminer

## [9.4.0] - 2020-04-22
### Added
- Added support for "p:" prefix in host for persistent connections (thanks to Patrick Schriner)
### Changed
- Update to Adminer 4.7.6 
- Compatible with TYPO3 9.5 and 10.0
- Clean up of session data on logout (thanks to Lex Frolenko)

## [9.3.0] - 2019-03-16
### Changed
- Compatible with PHP 7.3 and TYPO3 10.0.0-dev
- Update to Adminer 4.7.1

## [9.2.0] - 2018-10-01
### Added
- Access restricted to system maintainers(!)
- Readable dates now support the date fields defined in the TCA ctrl section
- Added support for SQLite

### Changed
- Compatibility only for TYPO3 v9 LTS
- Update to Adminer 4.6.3
- Used new APIs from TYPO3 v9
- Cleaned up some variable names
  
### Removed
- Removed usage of deprecated function (and thus only support TYPO3 v9 in this release)

## [9.1.0] - 2018-04-25
### Changed
- Compatibility for TYPO3 9.3-dev
- Update to Adminer 4.6.2
- Plug-ins adapted to changes in Adminer (Thanks to Sebastian Fischer for the PR)
- Switched to XLIFF files
- Used icon registry

### Removed
- Removed unused code and images

## [9.0.0] - 2017-12-26
### Changed
- Compatibility for TYPO3 9.0
- Compatibility for PHP 7.2
### Added
- Plug-in to display UNIX timestamps in readable format (based on TCA config)
- Plug-in to scroll to the selected table in table list column
- Table list can scroll sideways to show long table names
### Removed
- Removed some unused images

## [8.0.1] - 2017-06-23
### Fixed
- Bugfix, missing adminer sources

## [8.0.0] - 2016-08-31
### Changed
- Update to Adminer 4.3.1
- Compatibility for TYPO3 8.7 LTS only (finally! Sorry it took me soooo long)
- Thanks to Dan Untenzu, Simon Schaufelberger for their contributions
- Use other svg filename for "add" icon for future compatibility
### Fixed
- Fix DBMS driver detection
### Added
- Adds port to host name if it is set (suggestion by Cedric Ziel)

## [7.0.10] - 2016-08-31
### Changed
- Compatible with TYPO3 8.3
- Update to Adminer 4.2.5
### Fixed
- Fix composer.json

## [7.0.9] - 2016-07-18
### Changed
- Compatibility with TYPO3 8.2
### Added
- Add composer.json

## [7.0.8] - 2016-04-12
### Changed
- Compatibility with TYPO3 8.1 (new database configuration)

## [7.0.7] - 2016-03-12
### Changed
- Upgrade to Adminer 4.2.4
- Updated plugin.php for compatibility with PHP 7.0
- Updated plugins for compatibility with PHP 7.0
### Added
- Added language keys for Bosnian and Finnish

## [] - 2015-12-10
### Changed
- Renamed classes to Classes for classloader compatibility
- Changed registration of module for compatibility with TYPO3 8.0

## [7.0.4] - 2015-12-03
### Changed
- Upgrade to Adminer 4.2.3
- Changed images to SVG, dropping FontAwesome completely
- Module icon is SVG now
- Compatibility for 7LTS only (7.6.0 and higher)
### Added
- Added language keys for Bulgarian, Galician en Greek

## [7.0.3] - 2015-10-03
### Changed
- Upgrade to Adminer 4.2.2
- Minor styling issues

## [7.0.2] - 2015-10-01
### Security
- Security fix! Version 7.0.2

## [] - 2015-04-12
### Changed
- Upgrade to Adminer 4.2.1
### Added
- Added Danish language key
### Fixed
- Fixed #65522 Missing icons (path to FontAwesome)

## [] - 2015-03-02
### Changed
- Upgrade to Adminer 4.2.0
- Compatible with TYPO3 CMS 7
### Added
- New module icon for TYPO3 CMS 7

## [] - 2014-05-07
### Changed
- Upgrade to Adminer 4.1.0
### Added
- Added plugin to disable version check in JS
- Added plugin to disable redirect to hide referrer
- Added and modified plugin to add option to store exports on server
- Styling added for two new options
- Added new language keys
### Fixed
- Styling fixes for IE
- Styling fixes for flash messages, selected table headers

## [] - 2014-03-26
### Changed
- Upgrade to Adminer 4.0.3
- Styling adjusted for new features
- Styling updated to match TYPO3 6.2

## [] - 2013-05-22
### Changed
- Upgrade to Adminer 3.7.0
### Added
- Added styling for paginator in Adminer
### Fixed
- Fixed CSS icon for descending sorting and TYPO3 4.x compatibility
- Fixed #48395 TYPO3 6.2 compatibility

## [] - 2013-01-27
### Changed
- Upgrade to Adminer 3.6.3
- Small CSS update to style table header actions

## [] - 2012-09-20
### Changed
- Upgrade to Adminer 3.6.1
- Compatibility with TYPO3 6.0
### Fixed
- Small CSS fix for upgrade and TYPO3 6.0 compatibility
### Added
- Added languages Indonesian (Malay), Serbian. Bengali isn't supported by TYPO3

## [1.0.1] - 2012-03-31
### Changed
- Updated manual with new screenshots
- Small clean-up of comments, missing PHPdoc headers, etc.
### Fixed
- Fixed #35224 Upgrade to Adminer 3.3.4
- Fixed #35423 Support TYPO3 4.6+ language codes
### Added
- Added support for new languages of Adminer

## [] - 2012-02-27
### Changed
- Tested compatibility with TYPO3 4.7
### Fixed
- Fixed #32501 PHP Fatal error: Call to a member function endPage() on a non-object
- Fixed tiny CSS issue with grey bar in second column
- Fixed styling of messages / errors in second column

## [beta] - 2011-08-29
### Changed
- Updated Adminer to 3.3.3
- Tested extension with TYPO3 4.6 and updated dependency
### Added
- Added TYPO3 styling to add/up/down/delete buttons in create/alter table

## [0.0.3] - 2011-08-07
### Security
- Security Fix! version 0.03
### Fixed
- Fixed #28780 sometimes the uid column is missing (CSS issue)
- Fixed #28348 Update to Adminer 3.3.0 (3.3.1 now included)

## [] - 2011-07-29
### Changed
- Updated Adminer to 3.3.1 which fixes a XSS issue (thanks to Georg Ringer)
### Fixed
- Fixed problem that adminer script could be called outside the extension (still needed login to database)
- Fixed session problem (after logging out the session data of t3adminer was still present)

## [] - 2011-07-07
### Fixed
- Fixed #27624 Design problem with Opera 11
- Fixed #27626 adminer.css - adding linear-gradient

## [0.0.2] - 2011-06-09

## [] - 2011-06-09
### Added
- made styling of table list similar to pagetree (active item only working in IE / Safari because Firefox / Chrome use Ajax
  call to only load content block)
### Changed
- changed styling of links on top to tabs similar to TYPO3 backend (the content below can't be in a block because of the
  HTML generated by Adminer)
### Fixed
- various small CSS issues fixed (tested in Firefox 4, IE9, Safari and Chrome)

## [] - 2011-06-06
### Added
- [feature] two options for IP restriction added

## [] - 2011-06-04
### Fixed
- fixed styling for edit links in table list, logout button

## [] - 2011-05-26
### Added
- initial code generated with kickstarter
