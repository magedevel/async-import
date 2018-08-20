<?php
namespace Magento\Redis\Model;

use Magento\Redis\Model\KeyValueStorage\Exception as KeyValueStorageException;

interface KeyValueStorageInterface
{
    public function get(string $key): string;

    /**
     * Throw an exception if the record exists.
     *
     * @param string $key
     * @param string $value
     * @return $this
     * @throws KeyValueStorageException
     */
    public function add(string $key, string $value): self;

    /**
     * Throw an exception if key does not exist.
     *
     * @param string $key
     * @param string $value
     * @return $this
     * @throws KeyValueStorageException
     */
    public function update(string $key, string $value): self;

    /**
     * Throw an exception if key does not exist.
     *
     * @param string $key
     * @return $this
     * @throws KeyValueStorageException
     */
    public function delete(string $key): self;

    /**
     * Return values by tags
     *
     * @param string[] $tags
     * @return string[]
     */
    public function getByTags(array $tags): array;


    /**
     * Must add all or none.
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