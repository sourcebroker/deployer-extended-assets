deployer-extended-assets
========================

      .. image:: http://img.shields.io/packagist/v/sourcebroker/deployer-extended-assets.svg?style=flat
         :target: https://packagist.org/packages/sourcebroker/deployer-extended-assets

      .. image:: https://img.shields.io/badge/license-MIT-blue.svg?style=flat
         :target: https://packagist.org/packages/sourcebroker/deployer-extended-assets

.. contents:: :local:

What does it do?
----------------

Add tasks that allows to build and deploy frontend assets from local level.

The flow first checks if the git repo is clean and all changes pushed. If yes that means that we are in state that
is secure to make build and upload changes to git.

It is strongly advisable to run build in predictable env inside docker (an extremely good local docker env is https://ddev.com/)

Look inside ``./deployer/assets/config/set.php`` to check avaliable options.

Changelog
---------

See https://github.com/sourcebroker/deployer-extended-assets/blob/master/CHANGELOG.rst
