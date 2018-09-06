<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\KeyValue;

/**
 * Internal API to work with storage implementing key-value data access (e.g. Redis)
 */
interface KeyValueStorageInterface
{
    /**
     * Get value by key, throw exception if does not exist.
     *
     * @param string $key
     * @return string
     * @throws KeyValueStorageException
     */
    public function get(string $key): string;

    /**
     * Add a new item to the storage, throw an exception if the record exists.
     *
     * @param string $key
     * @param string $value
     * @return $this
     * @throws KeyValueStorageException
     */
    public function add(string $key, string $value): self;

    /**
     * Update existing item, throw an exception if does not exist.
     *
     * @param string $key
     * @param string $value
     * @return $this
     * @throws KeyValueStorageException
     */
    public function update(string $key, string $value): self;

    /**
     * Remove existing item, throw an exception if does not exist.
     *
     * @param string $key
     * @return $this
     * @throws KeyValueStorageException
     */
    public function delete(string $key): self;
}
