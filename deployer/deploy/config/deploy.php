<?php

namespace Deployer;

after('assets:frontend:build', 'assets:frontend:build_check');
before('deploy:prepare', 'assets:frontend:git_check');
after('assets:frontend:build', 'assets:frontend:upload');
after('deploy:vendors', 'assets:frontend:build');
