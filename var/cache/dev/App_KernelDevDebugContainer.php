<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG3zvbTR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG3zvbTR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG3zvbTR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG3zvbTR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG3zvbTR\App_KernelDevDebugContainer([
    'container.build_hash' => 'G3zvbTR',
    'container.build_id' => '8eab825c',
    'container.build_time' => 1717154626,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG3zvbTR');
