<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AffiliateBundle\Form\Type\Core;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Component\Registry\ServiceRegistryInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractConfigurationType extends AbstractResourceType
{
    /**
     * @var ServiceRegistryInterface
     */
    protected $registry;

    public function __construct($dataClass, ServiceRegistryInterface $registry)
    {
        parent::__construct($dataClass, array('Default'));

        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefined(array(
            'configuration_type',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_affiliate_provision';
    }
}
