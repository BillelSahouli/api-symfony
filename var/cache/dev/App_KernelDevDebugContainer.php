<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIpioGLc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIpioGLc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIpioGLc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIpioGLc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIpioGLc\App_KernelDevDebugContainer([
    'container.build_hash' => 'IpioGLc',
    'container.build_id' => 'e00aa301',
    'container.build_time' => 1638625617,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIpioGLc');
