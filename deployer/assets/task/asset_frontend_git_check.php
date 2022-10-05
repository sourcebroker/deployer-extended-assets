<?php

namespace Deployer;

task('assets:frontend:git_check', function () {
    $output = runLocally('git diff $(realpath {{assets_frontend_src}})');
    if (strlen($output)) {
        writeln($output);
        throw new GracefulShutdownException('Looks like your assets path: {{assets_frontend_src}} is not clean. Commit and push changes before deploying.');
    }
//    $output = runLocally('git diff origin/{{branch}}..{{branch}} --name-only');
//    $output = runLocally('git diff origin/master..HEAD --name-only');
//    if (strlen($output)) {
//        throw new GracefulShutdownException('Looks like you have commits locally. You should push them before doing deploy.');
//    }
})->desc('Check if assets path has git changed files or not pushed commits.');
