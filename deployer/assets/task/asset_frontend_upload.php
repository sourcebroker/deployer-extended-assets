<?php

namespace Deployer;

task('assets:frontend:upload', function () {
    if (!empty(get('assets_frontend_dist', false))) {
        $activeDir = test('[ -e {{deploy_path}}/release ]') ? get('deploy_path') . '/release' : get('deploy_path') . '/current';
        run('mkdir -p ' . $activeDir . '/' . get('assets_frontend_dist_remote'));
        upload(
            rtrim(get('assets_frontend_dist'), '/') . '/',
            $activeDir . '/' . rtrim(get('assets_frontend_dist_remote'), '/') . '/',
            [
                'progress_bar' => false,
                'options' => [
                    '--chmod=' . get('assets_upload_chmod_mask'),
                ],
            ]);
    }
});
