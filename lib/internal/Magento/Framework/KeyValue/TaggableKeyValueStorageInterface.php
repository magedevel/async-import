<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\KeyValue;

/**
 * Extend key-value storage interface with tag-related functionality
 */
interface TaggableKeyValueStorageInterface extends KeyValueStorageInterface
{
    /**
     * Return values by tags
     *
     * @param string[] $tags
     * @return string[]
     */
    public function getByTags(array $tags): array;

    /**
     * Add tags to an item. If not all tags were added - throw an exception.
     *
     * @param string $key
     * @param string[] $tags
     * @return $this
     * @throws KeyValueStorageException
     */
    public function addTags(string $key, array $tags): self;

    /**
     * Remove all, throw exception otherwise.
     *
     * @param string $key
     * @param array $tags
     * @return $this
     * @throws KeyValueStorageException
     */
    public function removeTags(string $key, array $tags): self;
}
