<?php

namespace Deployer;

task('assets:frontend:build', function () {
    runLocally('bash -ic "{{assets_frontend_build_deploy}}"');
})->desc('Build frontend assets.');
