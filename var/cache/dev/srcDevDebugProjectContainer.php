<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTdgEMFA\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTdgEMFA/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTdgEMFA.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTdgEMFA\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerTdgEMFA\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'TdgEMFA',
    'container.build_id' => '64dddcfc',
    'container.build_time' => 1530972374,
));
