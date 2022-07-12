.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

.. tip::

   New to reStructuredText and Sphinx?

   Get an introduction:
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/Index.html

   Use this cheat sheet as reference:
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/CheatSheet.html

.. _what-it-does:

What does it do?
================

Der autoloader hat das Ziel repitative Aufgaben wie die grundlegende Konfiguration von TYPO3 Kernkomponenten im Bezug auf Extension Entwicklung zu minimieren.
Das Framework des autoloaders ermöglicht auf Basis von "Loadern" eine granulare Konfiguration einzelner TYPO3 Kernkomponenten von Extensions.

Es gibt einen "Base Loader" der die konfigurierten "Sub Loader" und deren Rückgabewerte in den dafür vorgesehenen TYPO3 Extension Konfigurationsdateien bereit stellt. (ext_localconf.php, ext_tables.php, ?Configuration/Extbase/Persistence/Classes.php?)

Kurz gesagt: Es gibt eine Klasse die statische Methoden bereitstellt die man in der ext_localconf.php, ext_tables.php oder Classes.php mit einem Konfigurationsarray aufruft.
Die jeweiligen loader sorgen dafür, dass z.B. Templates erzeugt werden oder das konfigurationen in das TCA geschrieben werden.

Die Extension richtet sich an erfahrene Entwickler. Ein grundlegendes Verstandnis des TYPO3 Cores ist vorrausgesetzt.


The aim of this chapter is to provide a general overview of your extension.

*  What does it do?
*  What problems does it solve?
*  Who is the target audience?

This chapter should provide information that will help inform
potential users and assist them in deciding if they should
install and use this extension.

.. important::

   Do not forget to set extension's version number in :file:`Settings.cfg` file,
   in the :code:`release` property.
   It will be automatically picked up on the cover page by the :code:`|release|` substitution.

.. _screenshots:

Screenshots
===========

This chapter should help people understand how the extension works.
Remove it if it is not relevant.

.. figure:: /Images/Unbenannt.PNG
   :class: with-shadow
   :alt: Introduction Package
   :width: 300px

   Introduction Package after installation (caption of the image).

How the Frontend of the Introduction Package looks like after installation (legend of the image).
