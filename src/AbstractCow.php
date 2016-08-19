<?php

namespace Cowsay;

abstract class AbstractCow
{
    public
        $message,
        $wrapColumn,
        $eyes,
        $tongue,
        $preserveWhitespace;

    public function __construct(
        $message,
        $wrapColumn = 40,
        $eyes = "oo",
        $tongue = "  ",
        $preserveWhitespace = false
    ) {
        $this->message = $message;
        $this->wrapColumn = $wrapColumn;
        $this->eyes = mb_substr($eyes, 0, 2);
        $this->tongue = mb_substr($tongue, 0, 2);
        $this->preserveWhitespace = $preserveWhitespace;
    }

    public function generate(): string
    {
        return $this->getMessageBubble() . $this->getCow() . "\n";
    }

    /**
     * Get an array of lines.
     * If preserving whitespace, lines are not wrapped or left trimmed, but
     * tabs are replaced with 7 spaces.
     */
    protected function getLines(): array
    {
        if ($this->preserveWhitespace) {
            return explode(
                "\n",
                str_replace("\t", str_repeat(" ", 7), $this->message)
            );
        }

        return array_map(
            "ltrim",
            explode("\n", wordwrap($this->message, $this->wrapColumn))
        );
    }

    /**
     * Get the length of the longest line.
     */
    protected function getMaxLineLength(): int
    {
        return max(array_map("mb_strlen", $this->getlines()));
    }

    /**
     * Generate the message bubble with text inside.
     */
    protected function getMessageBubble(): string
    {
        $topRow = $this->getRow("_");
        $bottomRow = $this->getRow("-");
        $lines = $this->getLines();

        // If there is only one line, use alternate format
        if (count($lines) === 1) {
            return $topRow . "< " . $lines[0] . " >\n" . $bottomRow;
        }

        foreach ($lines as $key => &$line) {
            if ($key === 0) {
                $leftBorder = "/";
                $rightBorder = "\\";
            } else if ($key === count($lines) - 1) {
                $leftBorder = "\\";
                $rightBorder = "/";
            } else {
                $rightBorder = "|";
                $leftBorder = "|";
            }

            $line = $leftBorder . " " . $this->pad($line) . " " . $rightBorder;
        }

        return $topRow . implode("\n", $lines) . "\n" . $bottomRow;
    }

    /**
     * Add padding on the right of the line, so that the ending characters line
     * up.
     */
    protected function pad(string $line): string
    {
        return $line . str_repeat(
            " ",
            $this->getMaxLineLength() - strlen($line)
        );
    }

    /**
     * Generate a row of characters, to be used as the top and bottom of the
     * message bubble.
     * @return string
     */
    protected function getRow(string $char): string
    {
        return " " . str_repeat(
            $char,
            $this->getMaxLineLength() + 2
        ) . "\n";
    }
}
