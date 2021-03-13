<?php

namespace AyoubBajjou\Diff\Entry;
use AyoubBajjou\Diff\Text;

/**
 * Class InsertedEntry
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 *
 * @package AyoubBajjou\Diff\Entry
 */
class InsertedEntry extends AbstractEntry {
    /**
     * @param \AyoubBajjou\Diff\Text $content
     * @param int              $newPosition
     */
    public function __construct(Text $content, $newPosition) {
        $this->content = $content[$newPosition];
        $this->newPosition = $newPosition;
    }
}