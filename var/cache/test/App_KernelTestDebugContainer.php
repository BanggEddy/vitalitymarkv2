<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNYC9Uaq\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNYC9Uaq/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerNYC9Uaq.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerNYC9Uaq\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerNYC9Uaq\App_KernelTestDebugContainer([
    'container.build_hash' => 'NYC9Uaq',
    'container.build_id' => '6f5d93e8',
    'container.build_time' => 1716461976,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNYC9Uaq');
