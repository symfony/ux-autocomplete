<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Autocomplete\Tests\Fixtures\Factory;

use Doctrine\ORM\EntityRepository;
use Symfony\UX\Autocomplete\Tests\Fixtures\Entity\ProductTag;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ProductTag>
 *
 * @method static ProductTag|Proxy                createOne(array $attributes = [])
 * @method static ProductTag[]|Proxy[]            createMany(int $number, array|callable $attributes = [])
 * @method static ProductTag|Proxy                find(object|array|mixed $criteria)
 * @method static ProductTag|Proxy                findOrCreate(array $attributes)
 * @method static ProductTag|Proxy                first(string $sortedField = 'id')
 * @method static ProductTag|Proxy                last(string $sortedField = 'id')
 * @method static ProductTag|Proxy                random(array $attributes = [])
 * @method static ProductTag|Proxy                randomOrCreate(array $attributes = [])
 * @method static ProductTag[]|Proxy[]            all()
 * @method static ProductTag[]|Proxy[]            findBy(array $attributes)
 * @method static ProductTag[]|Proxy[]            randomSet(int $number, array $attributes = [])
 * @method static ProductTag[]|Proxy[]            randomRange(int $min, int $max, array $attributes = [])
 * @method static EntityRepository|RepositoryProxy repository()
 * @method        ProductTag|Proxy                create(array|callable $attributes = [])
 */
final class ProductTagFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->word(),
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return ProductTag::class;
    }
}
