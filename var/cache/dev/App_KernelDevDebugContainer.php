<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHMsUfVo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHMsUfVo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHMsUfVo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHMsUfVo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHMsUfVo\App_KernelDevDebugContainer([
    'container.build_hash' => 'HMsUfVo',
    'container.build_id' => '835288d0',
    'container.build_time' => 1718446501,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHMsUfVo');
