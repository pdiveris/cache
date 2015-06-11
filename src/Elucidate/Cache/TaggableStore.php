<?php namespace Elucidate\Cache;

abstract class TaggableStore
{
    /**
     * Begin executing a new tags operation.
     *
     * @param  string  $name
     * @return \Elucidate\Cache\TaggedCache
     */
    public function section($name)
    {
        return $this->tags($name);
    }

    /**
     * Begin executing a new tags operation.
     *
     * @param  array|mixed  $names
     * @return \Elucidate\Cache\TaggedCache
     */
    public function tags($names)
    {
        return new TaggedCache($this, new TagSet($this, is_array($names) ? $names : func_get_args()));
    }
}
