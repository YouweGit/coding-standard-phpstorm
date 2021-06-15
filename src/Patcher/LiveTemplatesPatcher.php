<?php

/**
 * Copyright Youwe. All rights reserved.
 * https://www.youweagency.nl
 */

declare(strict_types=1);

namespace Youwe\CodingStandard\PhpStorm\Patcher;

use Youwe\CodingStandard\PhpStorm\EnvironmentInterface;

class LiveTemplatesPatcher implements ConfigPatcherInterface
{
    use CopyFilesTrait;

    /**
     * Patch the config.
     *
     * @param EnvironmentInterface $environment
     *
     * @return void
     */
    public function patch(
        EnvironmentInterface $environment
    ): void {
        if (!empty($environment->getIdeDefaultConfigFilesystem()->getRoot())) {
            $this->copyDirectory(
                $environment->getDefaultsFilesystem(),
                $environment->getIdeDefaultConfigFilesystem(),
                'templates'
            );
        }
    }
}
