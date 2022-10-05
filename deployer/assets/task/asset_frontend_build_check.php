<?php

namespace Deployer;

use Deployer\Exception\GracefulShutdownException;

task('assets:frontend:build_check', function () {
    $buildCriticalFiles = (int)runLocally('bash -ic "ls -1 {{assets_frontend_dist}}/{{assets_frontend_dist_critical_file_extensions}} 2>/dev/null | wc -l"');
    if ($buildCriticalFiles === 0) {
        throw new GracefulShutdownException('Something wrong with your build. Check if maybe you are still in watch mode by accident.');;
    }
})->desc('Build assets check. If there is no critical files (CSS/JS) then deploy will fail.');
