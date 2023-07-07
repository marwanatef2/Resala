<?php
namespace RobustTools\Resala\Abstracts;

use RobustTools\Resala\Contracts\SMSDriverInterface;

abstract class Driver implements SMSDriverInterface
{
    protected string $senderName;

    abstract public function __construct(array $config);

    /**
     * Determine if sending to multiple recipients.
     *
     * @param string|array $recipients
     * @return bool
     */
    public function toMultiple($recipients): bool
    {
        return is_array($recipients);
    }

    public function senderName(string $senderName): string
    {
        return $this->senderName = $senderName;
    }

    /**
     * @return string|array
     */
    abstract protected function payload();

    abstract protected function headers(): array;
}
