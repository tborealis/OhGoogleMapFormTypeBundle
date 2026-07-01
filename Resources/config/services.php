<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Oh\GoogleMapFormTypeBundle\Form\Type\GoogleMapType;

return static function (ContainerConfigurator $container): void {
    $container->services()
        ->set('form.type.oh_google_maps', GoogleMapType::class)
        ->tag('form.type', ['alias' => 'oh_google_maps']);
};
