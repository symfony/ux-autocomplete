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
use Symfony\UX\Autocomplete\Tests\Fixtures\Entity\CategoryTag;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<CategoryTag>
 *
 * @method static CategoryTag|Proxy                createOne(array $attributes = [])
 * @method static CategoryTag[]|Proxy[]            createMany(int $number, array|callable $attributes = [])
 * @method static CategoryTag|Proxy                find(object|array|mixed $criteria)
 * @method static CategoryTag|Proxy                findOrCreate(array $attributes)
 * @method static CategoryTag|Proxy                first(string $sortedField = 'id')
 * @method static CategoryTag|Proxy                last(string $sortedField = 'id')
 * @method static CategoryTag|Proxy                random(array $attributes = [])
 * @method static CategoryTag|Proxy                randomOrCreate(array $attributes = [])
 * @method static CategoryTag[]|Proxy[]            all()
 * @method static CategoryTag[]|Proxy[]            findBy(array $attributes)
 * @method static CategoryTag[]|Proxy[]            randomSet(int $number, array $attributes = [])
 * @method static CategoryTag[]|Proxy[]            randomRange(int $min, int $max, array $attributes = [])
 * @method static EntityRepository|RepositoryProxy repository()
 * @method        CategoryTag|Proxy                create(array|callable $attributes = [])
 */
final class CategoryTagFactory extends ModelFactory
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
        return CategoryTag::class;
    }
}
