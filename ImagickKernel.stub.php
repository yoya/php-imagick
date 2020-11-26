<?php

/** @generate-function-entries */

#ifdef IMAGICK_WITH_KERNEL
class ImagickKernel
{
    public function addKernel(ImagickKernel $kernel): void {}

    public function addUnityKernel(float $scale): void {}

    public static function fromBuiltin(int $kernel_type, string $shape): ImagickKernel {}

    public static function fromMatrix(array $matrix, ?array $origin): ImagickKernel {}

    public function getMatrix(): array {}

    public function scale(float $scale, ?int $normalize_kernel_type): void {}

    public function separate(): array {}
}
#endif
