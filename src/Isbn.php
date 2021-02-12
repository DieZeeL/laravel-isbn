<?php

namespace Diezeel\LaravelIsbn;

class Isbn extends \Nicebooks\Isbn\Isbn
{

    /**
     * @param  string|\Nicebooks\Isbn\Isbn|Isbn  $isbn
     * @return Isbn
     * @throws \Nicebooks\Isbn\Exception\InvalidIsbnException
     */
    public static function of($isbn): Isbn
    {
        if ($isbn instanceof Isbn) {
            return $isbn;
        }
        return Isbn::of((string) $isbn);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->format();
    }
}
