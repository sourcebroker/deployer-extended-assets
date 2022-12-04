<?php

namespace Deployer;

set('assets_frontend_src', $_ENV['ASSETS_FRONTEND_SRC'] ?? 'assets');
set('assets_frontend_dist', $_ENV['ASSETS_FRONTEND_DIST'] ?? 'public/assets/frontend/build');
set('assets_frontend_dist_critical_file_extensions', '*.{css,js}');
set('assets_frontend_dist_remote', $_ENV['ASSETS_FRONTEND_DIST_REMOTE'] ?? 'public/assets/frontend/build');
set('assets_frontend_build_deploy',
    $_ENV['ASSETS_FRONTEND_BUILD_DEPLOY'] ?? 'nvm install --latest-npm && npm ci && npm run production');
set('assets_upload_chmod_mask', $_ENV['ASSETS_UPLOAD_CHMOD_MASK'] ?? 'D0755,F644');
